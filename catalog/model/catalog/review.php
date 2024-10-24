<?php
namespace Opencart\Catalog\Model\Catalog;
/**
 * Class Review
 *
 * @package Opencart\Catalog\Model\Catalog
 */
class Review extends \Opencart\System\Engine\Model {
	/**
	 * @param int   $product_id
	 * @param array $data
	 *
	 * @return int
	 */
	public function addReview(int $product_id, array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "review` SET `author` = '" . $this->db->escape((string)$data['name']) . "', `customer_id` = '" . (int)$this->customer->getId() . "', `product_id` = '" . (int)$product_id . "', `text` = '" . $this->db->escape((string)$data['text']) . "', `status` = '" . (int)1 . "', `value_for_money` = '" . (int)$data['value_for_money'] . "', `rating` = '" . (int)$data['rating'] . "', `date_added` = NOW()");

		return $this->db->getLastId();
	}

	/**
	 * @param int $product_id
	 * @param int $start
	 * @param int $limit
	 *
	 * @return array
	 */
	public function getReviewsByProductId(int $product_id, int $start = 0, int $limit = 20): array {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 20;
		}

		$query = $this->db->query("SELECT r.`author`, r.`rating`, r.`value_for_money`, r.`text`, r.`date_added` FROM `" . DB_PREFIX . "review` r LEFT JOIN `" . DB_PREFIX . "product` p ON (r.`product_id` = p.`product_id`) LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.`product_id` = pd.`product_id`) WHERE r.`product_id` = '" . (int)$product_id . "' AND p.`date_available` <= NOW() AND p.`status` = '1' AND r.`status` = '1' AND pd.`language_id` = '" . (int)$this->config->get('config_language_id') . "' ORDER BY r.`date_added` DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	/**
	 * @param int $product_id
	 *
	 * @return int
	 */
	public function getTotalReviewsByProductId(int $product_id): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "review` r LEFT JOIN `" . DB_PREFIX . "product` p ON (r.`product_id` = p.`product_id`) LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.`product_id` = pd.`product_id`) WHERE p.`product_id` = '" . (int)$product_id . "' AND p.`date_available` <= NOW() AND p.`status` = '1' AND r.`status` = '1' AND pd.`language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return (int)$query->row['total'];
	}
}
