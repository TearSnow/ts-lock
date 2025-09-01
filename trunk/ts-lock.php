<?php
/**
 * Plugin Name:		TS Lock
 * Description:		TS Lock 是由泪雪开发的 WordPress 更新锁（core_updater.lock）的一键自动清除工具，解决“另一更新正在进行”的问题。插件自动停用，无UI、无菜单、无数据库写入。
 * Version:			0.1
 * Requires at least:	6.0
 * Requires PHP:		7.2
 * Author:			TearSnow
 * Author URI:		https://tearsnow.com
 * License:			GPL v2
 */

if (!defined('ABSPATH')) exit;

// 激活时执行：清除锁并自动停用插件
register_activation_hook(__FILE__, function () {
	// 删除更新锁（如果存在）
	if (get_option('core_updater.lock')) {
		delete_option('core_updater.lock');
	}

	// 显示成功通知
	wp_die('✅ 已清除 core_updater.lock，插件将自动停用。 <a href="' . esc_url(admin_url('update-core.php')) . '">开始 WordPress 更新</a>', '清理成功', [
		'back_link' => true // 添加返回链接以便用户可以返回插件列表
	]);

	// 插件停用（此行在wp_die()之后不会执行，但为了确保逻辑完整，保留）
	deactivate_plugins(plugin_basename(__FILE__), true);
});
