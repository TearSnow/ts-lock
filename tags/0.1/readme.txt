=== TS Lock ===
Contributors: TearSnow
Donate link: https://tearsnow.com/
Tags: TearSnow, core_updater.lock, WordPress更新锁
Requires at least: 6.0
Tested up to: 6.8
Stable tag: 0.1
Requires PHP: 7.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

TS Lock 是由泪雪开发的 WordPress 更新锁（core_updater.lock）的一键自动清除工具，解决“另一更新正在进行”的问题。插件自动停用，无UI、无菜单、无数据库写入。

== Description ==

TS Lock的作用就是一键清除 `core_updater.lock` 锁，解决“另一更新正在进行”的问题，并在任务完成后自动停用自身。

WordPress 升级更新时，系统会在数据库的 _options 表中写入一个名为 `core_updater.lock` 的临时选项。这是一个锁机制（Lock），用于防止多个更新任务同时进行，避免数据冲突或破坏。

锁值是一个时间戳；WordPress 会在执行更新期间检查这个锁是否存在；如果发现锁未过期，就会阻止再次更新，并提示：另一更新正在进行。（Another update is currently in progress.）

### ✅ 正常情况下：
- 这个锁会在更新完成后自动移除；
- 或者在 15 分钟左右自动过期。

### ❌ 但如果更新失败或中断：
- 该锁可能会 **永久卡住**；
- 你将无法再次执行更新操作，除非手动从数据库中删除它。


### ✅ 插件特点：

- **无需设置**：启用插件即执行，无需后台菜单或选项；
- **立即执行**：立刻检测并删除 `core_updater.lock`；
- **无数据库残留**：不会新增或保存任何设置；
- **自动停用**：任务完成后插件立即停用自身，避免重复执行；
- **用户提示**：显示清晰的“任务成功”通知，并提供按钮直达 WordPress 更新页面。

### 🎯 使用场景：

- 你在后台更新 WordPress 核心时，提示：“另一更新正在进行”；
- 已经等待很久仍无法重新更新；
- 不方便使用数据库工具手动删除锁；
- 希望快速恢复更新功能。

== Frequently Asked Questions ==

= 如何安装 =

1. 上传插件到 `/wp-content/plugins/` 目录
2. 激活插件即可自动清理，然后自动停用插件。

== Screenshots ==

1. 插件安装成功后通过WordPress后台插件列表中启用“TS Lock”即可
2. WordPress更新锁清理成功，可以重新开始更新WordPress程序

== Changelog ==

= 0.1 =
Initial release.

== Upgrade Notice ==

= 0.1 =
Initial release.