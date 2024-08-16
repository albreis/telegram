<?php namespace Albreis\Telegram;

interface BotInterface {
    /**
     * Undocumented function
     *
     * @param  string $token
     * @return mixed
     */
    public static function init(string $token);
    /**
     * Undocumented function
     *
     * @param  integer|string $chat_id
     * @param  [type]         $action
     * @param  integer|null   $business_connection_id
     * @param  integer|null   $message_thread_id
     * @return mixed
     */
    public static function sendChatAction(...$params);
    /**
     * Undocumented function
     *
     * @param  integer|string $chat_id
     * @param  integer        $user_id
     * @param  integer|null   $until_date
     * @param  boolean|null   $revoke_messages
     * @return mixed
     */
    public static function banChatMember(...$params);
    /**
     * Undocumented function
     *
     * @param  integer|string $chat_id
     * @param  integer        $user_id
     * @param  boolean|null   $only_if_banned
     * @return mixed
     */
    public static function unbanChatMember(...$params);
    /**
     * Undocumented function
     *
     * @param  integer|string $chat_id
     * @param  integer        $user_id
     * @param  Permissions    $permissions
     * @param  boolean|null   $use_independent_chat_permissions
     * @param  integer|null   $until_date
     * @return mixed
     */
    public static function restrictChatMember(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $user_id
     * @param  [type] $is_anonymous
     * @param  [type] $can_manage_chat
     * @param  [type] $can_delete_messages
     * @param  [type] $can_manage_video_chats
     * @param  [type] $can_restrict_members
     * @param  [type] $can_promote_members
     * @param  [type] $can_change_info
     * @param  [type] $can_invite_users
     * @param  [type] $can_post_stories
     * @param  [type] $can_edit_stories
     * @param  [type] $can_delete_stories
     * @param  [type] $can_post_messages
     * @param  [type] $can_edit_messages
     * @param  [type] $can_pin_messages
     * @param  [type] $can_manage_topics
     * @return mixed
     */
    public static function promoteChatMember(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $user_id
     * @param  [type] $custom_title
     * @return mixed
     */
    public static function setChatAdministratorCustomTitle(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $sender_chat_id
     * @return mixed
     */
    public static function banChatSenderChat(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $sender_chat_id
     * @return mixed
     */
    public static function unbanChatSenderChat(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $permissions
     * @param  [type] $use_independent_chat_permissions
     * @return mixed
     */
    public static function setChatPermissions(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function exportChatInviteLink(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $name
     * @param  [type] $expire_date
     * @param  [type] $member_limit
     * @param  [type] $creates_join_request
     * @return mixed
     */
    public static function createChatInviteLink(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $invite_link
     * @param  [type] $name
     * @param  [type] $expire_date
     * @param  [type] $member_limit
     * @param  [type] $creates_join_request
     * @return mixed
     */
    public static function editChatInviteLink(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $name
     * @param  [type] $subscription_period
     * @param  [type] $subscription_price
     * @return mixed
     */
    public static function createChatSubscriptionInviteLink(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $invite_link
     * @param  [type] $name
     * @return mixed
     */
    public static function editChatSubscriptionInviteLink(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $invite_link
     * @return mixed
     */
    public static function revokeChatInviteLink(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $user_id
     * @return mixed
     */
    public static function approveChatJoinRequest(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $user_id
     * @return mixed
     */
    public static function declineChatJoinRequest(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $photo
     * @return mixed
     */
    public static function setChatPhoto(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function deleteChatPhoto(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $title
     * @return mixed
     */
    public static function setChatTitle(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $description
     * @return mixed
     */
    public static function setChatDescription(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @param  [type] $disable_notification
     * @return mixed
     */
    public static function pinChatMessage(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @return mixed
     */
    public static function unpinChatMessage(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function unpinAllChatMessages(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function leaveChat(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function getChat(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function getChatAdministrators(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function getChatMemberCount(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $user_id
     * @return mixed
     */
    public static function getChatMember(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $sticker_set_name
     * @return mixed
     */
    public static function setChatStickerSet(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function deleteChatStickerSet(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $menu_button
     * @return mixed
     */
    public static function setChatMenuButton(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function getChatMenuButton(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $user_id
     * @return mixed
     */
    public static function getUserChatBoosts(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $name
     * @param  [type] $icon_color
     * @param  [type] $icon_custom_emoji_id
     * @return mixed
     */
    public static function getForumTopicIconStickers(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $name
     * @param  [type] $icon_color
     * @param  [type] $icon_custom_emoji_id
     * @return mixed
     */
    public static function createForumTopic(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $name
     * @param  [type] $icon_custom_emoji_id
     * @return mixed
     */
    public static function editForumTopic(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @return mixed
     */
    public static function closeForumTopic(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @return mixed
     */
    public static function reopenForumTopic(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @return mixed
     */
    public static function deleteForumTopic(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @return mixed
     */
    public static function unpinAllForumTopicMessages(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $name
     * @return mixed
     */
    public static function editGeneralForumTopic(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function closeGeneralForumTopic(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function reopenGeneralForumTopic(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function hideGeneralForumTopic(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function unhideGeneralForumTopic(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @return mixed
     */
    public static function unpinAllGeneralForumTopicMessages(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $callback_query_id
     * @param  [type] $text
     * @param  [type] $show_alert
     * @param  [type] $url
     * @param  [type] $cache_time
     * @return mixed
     */
    public static function answerCallbackQuery(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @return mixed
     */
    public static function getBusinessConnection(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $commands
     * @param  [type] $scope
     * @param  [type] $language_code
     * @return mixed
     */
    public static function setMyCommands(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $scope
     * @param  [type] $language_code
     * @return mixed
     */
    public static function deleteMyCommands(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $scope
     * @param  [type] $language_code
     * @return mixed
     */
    public static function getMyCommands(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $name
     * @param  [type] $language_code
     * @return mixed
     */
    public static function setMyName(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $language_code
     * @return mixed
     */
    public static function getMyName(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $description
     * @param  [type] $language_code
     * @return mixed
     */
    public static function setMyDescription(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $language_code
     * @return mixed
     */
    public static function getMyDescription(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $short_description
     * @param  [type] $language_code
     * @return mixed
     */
    public static function setMyShortDescription(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $language_code
     * @return mixed
     */
    public static function getMyShortDescription(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $rights
     * @param  [type] $for_channels
     * @return mixed
     */
    public static function setMyDefaultAdministratorRights(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $for_channels
     * @return mixed
     */
    public static function getMyDefaultAdministratorRights(...$params );
    /**
     * Undocumented function
     *
     * @return mixed
     */
    public static function getMe();
    /**
     * Undocumented function
     *
     * @return mixed
     */
    public static function logOut();
    /**
     * Undocumented function
     *
     * @return mixed
     */
    public static function close();
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $text
     * @param  [type] $parse_mode
     * @param  [type] $entities
     * @param  [type] $link_preview_options
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendMessage(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $from_chat_id
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_id
     * @return mixed
     */
    public static function forwardMessage(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $from_chat_id
     * @param  [type] $message_ids
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @return mixed
     */
    public static function forwardMessages(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $from_chat_id
     * @param  [type] $message_id
     * @param  [type] $caption
     * @param  [type] $parse_mode
     * @param  [type] $caption_entities
     * @param  [type] $show_caption_above_media
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function copyMessage(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $from_chat_id
     * @param  [type] $message_ids
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $remove_caption
     * @return mixed
     */
    public static function copyMessages(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @param  [type] $inline_message_id
     * @param  [type] $text
     * @param  [type] $parse_mode
     * @param  [type] $entities
     * @param  [type] $link_preview_options
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function editMessageText(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @param  [type] $inline_message_id
     * @param  [type] $caption
     * @param  [type] $parse_mode
     * @param  [type] $caption_entities
     * @param  [type] $show_caption_above_media
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function editMessageCaption(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @param  [type] $inline_message_id
     * @param  [type] $media
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function editMessageMedia(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @param  [type] $inline_message_id
     * @param  [type] $latitude
     * @param  [type] $longitude
     * @param  [type] $live_period
     * @param  [type] $horizontal_accuracy
     * @param  [type] $heading
     * @param  [type] $proximity_alert_radius
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function editMessageLiveLocation(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @param  [type] $inline_message_id
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function stopMessageLiveLocation(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @param  [type] $inline_message_id
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function editMessageReplyMarkup(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @return mixed
     */
    public static function deleteMessage(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function stopPoll(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $sticker
     * @param  [type] $emoji
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendSticker(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $name
     * @return mixed
     */
    public static function getStickerSet(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $custom_emoji_ids
     * @return mixed
     */
    public static function getCustomEmojiStickers(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $user_id
     * @param  [type] $sticker
     * @param  [type] $sticker_format
     * @return mixed
     */
    public static function uploadStickerFile(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $user_id
     * @param  [type] $name
     * @param  [type] $title
     * @param  [type] $stickers
     * @param  [type] $sticker_type
     * @param  [type] $needs_repainting
     * @return mixed
     */
    public static function createNewStickerSet(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $user_id
     * @param  [type] $name
     * @param  [type] $sticker
     * @return mixed
     */
    public static function addStickerToSet(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $sticker
     * @param  [type] $position
     * @return mixed
     */
    public static function setStickerPositionInSet(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $sticker
     * @return mixed
     */
    public static function deleteStickerFromSet(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $user_id
     * @param  [type] $name
     * @param  [type] $old_sticker
     * @param  [type] $sticker
     * @return mixed
     */
    public static function replaceStickerInSet(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $sticker
     * @param  [type] $emoji_list
     * @return mixed
     */
    public static function setStickerEmojiList(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $sticker
     * @param  [type] $keywords
     * @return mixed
     */
    public static function setStickerKeywords(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $sticker
     * @param  [type] $mask_position
     * @return mixed
     */
    public static function setStickerMaskPosition(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $name
     * @param  [type] $title
     * @return mixed
     */
    public static function setStickerSetTitle(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $name
     * @param  [type] $user_id
     * @param  [type] $thumbnail
     * @param  [type] $format
     * @return mixed
     */
    public static function setStickerSetThumbnail(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $name
     * @param  [type] $custom_emoji_id
     * @return mixed
     */
    public static function setCustomEmojiStickerSetThumbnail(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $name
     * @return mixed
     */
    public static function deleteStickerSet(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $photo
     * @param  [type] $caption
     * @param  [type] $parse_mode
     * @param  [type] $caption_entities
     * @param  [type] $show_caption_above_media
     * @param  [type] $has_spoiler
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendPhoto(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $audio
     * @param  [type] $caption
     * @param  [type] $parse_mode
     * @param  [type] $caption_entities
     * @param  [type] $duration
     * @param  [type] $performer
     * @param  [type] $title
     * @param  [type] $thumbnail
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendAudio(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $document
     * @param  [type] $thumbnail
     * @param  [type] $caption
     * @param  [type] $parse_mode
     * @param  [type] $caption_entities
     * @param  [type] $disable_content_type_detection
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendDocument(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $video
     * @param  [type] $duration
     * @param  [type] $width
     * @param  [type] $height
     * @param  [type] $thumbnail
     * @param  [type] $caption
     * @param  [type] $parse_mode
     * @param  [type] $caption_entities
     * @param  [type] $show_caption_above_media
     * @param  [type] $has_spoiler
     * @param  [type] $supports_streaming
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendVideo(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $animation
     * @param  [type] $duration
     * @param  [type] $width
     * @param  [type] $height
     * @param  [type] $thumbnail
     * @param  [type] $caption
     * @param  [type] $parse_mode
     * @param  [type] $caption_entities
     * @param  [type] $show_caption_above_media
     * @param  [type] $has_spoiler
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendAnimation(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $voice
     * @param  [type] $caption
     * @param  [type] $parse_mode
     * @param  [type] $caption_entities
     * @param  [type] $duration
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendVoice(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $video_note
     * @param  [type] $duration
     * @param  [type] $length
     * @param  [type] $thumbnail
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendVideoNote(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $star_count
     * @param  [type] $media
     * @param  [type] $caption
     * @param  [type] $parse_mode
     * @param  [type] $caption_entities
     * @param  [type] $show_caption_above_media
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendPaidMedia(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $media
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @return mixed
     */
    public static function sendMediaGroup(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $latitude
     * @param  [type] $longitude
     * @param  [type] $horizontal_accuracy
     * @param  [type] $live_period
     * @param  [type] $heading
     * @param  [type] $proximity_alert_radius
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendLocation(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $latitude
     * @param  [type] $longitude
     * @param  [type] $title
     * @param  [type] $address
     * @param  [type] $foursquare_id
     * @param  [type] $foursquare_type
     * @param  [type] $google_place_id
     * @param  [type] $google_place_type
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendVenue(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $phone_number
     * @param  [type] $first_name
     * @param  [type] $last_name
     * @param  [type] $vcard
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendContact(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $question
     * @param  [type] $question_parse_mode
     * @param  [type] $question_entities
     * @param  [type] $options
     * @param  [type] $is_anonymous
     * @param  [type] $type
     * @param  [type] $allows_multiple_answers
     * @param  [type] $correct_option_id
     * @param  [type] $explanation
     * @param  [type] $explanation_parse_mode
     * @param  [type] $explanation_entities
     * @param  [type] $open_period
     * @param  [type] $close_date
     * @param  [type] $is_closed
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendPoll(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $business_connection_id
     * @param  [type] $chat_id
     * @param  [type] $message_thread_id
     * @param  [type] $emoji
     * @param  [type] $disable_notification
     * @param  [type] $protect_content
     * @param  [type] $message_effect_id
     * @param  [type] $reply_parameters
     * @param  [type] $reply_markup
     * @return mixed
     */
    public static function sendDice(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $chat_id
     * @param  [type] $message_id
     * @param  [type] $reaction
     * @param  [type] $is_big
     * @return mixed
     */
    public static function setMessageReaction(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $user_id
     * @param  [type] $offset
     * @param  [type] $limit
     * @return mixed
     */
    public static function getUserProfilePhotos(...$params);
    /**
     * Undocumented function
     *
     * @param  [type] $file_id
     * @return mixed
     */
    public static function getFile(...$params);
}