<?php namespace Albreis\Telegram;

use Albreis\Telegram\Chat\Permissions;
/**
 * Undocumented class
 *
 * @category Category
 * @package  Package
 * @author   ER Soluções Web LTDA <contato@ersolucoesweb.com.br>
 * @license  MIT  https://ersolucoesweb.com.br
 * @link     https://ersolucoesweb.com.br
 */
class BotRestrict {

    use Request;
    
    private static $token;

    /**
     * Undocumented function
     *
     * @param  string $token
     * @return void
     */
    public static function init(string $token) 
    {
        self::$token = $token;
    }

    public static function sendChatAction(
        int|string $chat_id, 
        $action, 
        ?int $business_connection_id, 
        ?int $message_thread_id
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function banChatMember(
        int|string $chat_id, 
        int $user_id, 
        ?int $until_date, 
        ?bool $revoke_messages
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function unbanChatMember(
        int|string $chat_id, 
        int $user_id, 
        ?bool $only_if_banned
    ) 
    {
        return self::sendGetRequest(__FUNCTION__, get_defined_vars());
    }
    
    public static function restrictChatMember(
        int|string $chat_id, 
        int $user_id, 
        Permissions $permissions, 
        ?bool $use_independent_chat_permissions, 
        ?int $until_date
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function promoteChatMember(
        $chat_id = null,
        $user_id = null,
        $is_anonymous = null,
        $can_manage_chat = null,
        $can_delete_messages = null,
        $can_manage_video_chats = null,
        $can_restrict_members = null,
        $can_promote_members = null,
        $can_change_info = null,
        $can_invite_users = null,
        $can_post_stories = null,
        $can_edit_stories = null,
        $can_delete_stories = null,
        $can_post_messages = null,
        $can_edit_messages = null,
        $can_pin_messages = null,
        $can_manage_topics = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setChatAdministratorCustomTitle(
        $chat_id = null,
        $user_id = null,
        $custom_title = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function banChatSenderChat(
        $chat_id = null,
        $sender_chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function unbanChatSenderChat(
        $chat_id = null,
        $sender_chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setChatPermissions(
        $chat_id = null,
        $permissions = null,
        $use_independent_chat_permissions = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function exportChatInviteLink(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function createChatInviteLink(
        $chat_id = null,
        $name = null,
        $expire_date = null,
        $member_limit = null,
        $creates_join_request = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function editChatInviteLink(
        $chat_id = null,
        $invite_link = null,
        $name = null,
        $expire_date = null,
        $member_limit = null,
        $creates_join_request = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function createChatSubscriptionInviteLink(
        $chat_id = null,
        $name = null,
        $subscription_period = null,
        $subscription_price = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function editChatSubscriptionInviteLink(
        $chat_id = null,
        $invite_link = null,
        $name = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function revokeChatInviteLink(
        $chat_id = null,
        $invite_link = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function approveChatJoinRequest(
        $chat_id = null,
        $user_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function declineChatJoinRequest(
        $chat_id = null,
        $user_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setChatPhoto(
        $chat_id = null,
        $photo = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function deleteChatPhoto(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setChatTitle(
        $chat_id = null,
        $title = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setChatDescription(
        $chat_id = null,
        $description = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function pinChatMessage(
        $business_connection_id = null,
        $chat_id = null,
        $message_id = null,
        $disable_notification = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function unpinChatMessage(
        $business_connection_id = null,
        $chat_id = null,
        $message_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function unpinAllChatMessages(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function leaveChat(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getChat(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getChatAdministrators(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getChatMemberCount(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getChatMember(
        $chat_id = null,
        $user_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setChatStickerSet(
        $chat_id = null,
        $sticker_set_name = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function deleteChatStickerSet(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setChatMenuButton(
        $chat_id = null,
        $menu_button = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getChatMenuButton(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getUserChatBoosts(
        $chat_id = null,
        $user_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    
    public static function getForumTopicIconStickers(
        $chat_id = null,
        $name = null,
        $icon_color = null,
        $icon_custom_emoji_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function createForumTopic(
        $chat_id = null,
        $name = null,
        $icon_color = null,
        $icon_custom_emoji_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function editForumTopic(
        $chat_id = null,
        $message_thread_id = null,
        $name = null,
        $icon_custom_emoji_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function closeForumTopic(
        $chat_id = null,
        $message_thread_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function reopenForumTopic(
        $chat_id = null,
        $message_thread_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function deleteForumTopic(
        $chat_id = null,
        $message_thread_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function unpinAllForumTopicMessages(
        $chat_id = null,
        $message_thread_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function editGeneralForumTopic(
        $chat_id = null,
        $name = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function closeGeneralForumTopic(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function reopenGeneralForumTopic(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function hideGeneralForumTopic(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function unhideGeneralForumTopic(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function unpinAllGeneralForumTopicMessages(
        $chat_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function answerCallbackQuery(
        $callback_query_id = null,
        $text = null,
        $show_alert = null,
        $url = null,
        $cache_time = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getBusinessConnection(
        $business_connection_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setMyCommands(
        $commands = null,
        $scope = null,
        $language_code = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function deleteMyCommands(
        $scope = null,
        $language_code = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getMyCommands(
        $scope = null,
        $language_code = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setMyName(
        $name = null,
        $language_code = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getMyName(
        $language_code = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setMyDescription(
        $description = null,
        $language_code = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getMyDescription(
        $language_code = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setMyShortDescription(
        $short_description = null,
        $language_code = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getMyShortDescription(
        $language_code = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setMyDefaultAdministratorRights(
        $rights = null,
        $for_channels = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getMyDefaultAdministratorRights(
        $for_channels = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }

    
    public static function getMe() 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function logOut() 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function close() 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendMessage(
        $chat_id,
        $text,
        $business_connection_id = null,
        $message_thread_id = null,
        $parse_mode = null,
        $entities = null,
        $link_preview_options = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function forwardMessage(
        $chat_id = null,
        $message_thread_id = null,
        $from_chat_id = null,
        $disable_notification = null,
        $protect_content = null,
        $message_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function forwardMessages(
        $chat_id = null,
        $message_thread_id = null,
        $from_chat_id = null,
        $message_ids = null,
        $disable_notification = null,
        $protect_content = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function copyMessage(
        $chat_id = null,
        $message_thread_id = null,
        $from_chat_id = null,
        $message_id = null,
        $caption = null,
        $parse_mode = null,
        $caption_entities = null,
        $show_caption_above_media = null,
        $disable_notification = null,
        $protect_content = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function copyMessages(
        $chat_id = null,
        $message_thread_id = null,
        $from_chat_id = null,
        $message_ids = null,
        $disable_notification = null,
        $protect_content = null,
        $remove_caption = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function editMessageText(
        $business_connection_id = null,
        $chat_id = null,
        $message_id = null,
        $inline_message_id = null,
        $text = null,
        $parse_mode = null,
        $entities = null,
        $link_preview_options = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function editMessageCaption(
        $business_connection_id = null,
        $chat_id = null,
        $message_id = null,
        $inline_message_id = null,
        $caption = null,
        $parse_mode = null,
        $caption_entities = null,
        $show_caption_above_media = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function editMessageMedia(
        $business_connection_id = null,
        $chat_id = null,
        $message_id = null,
        $inline_message_id = null,
        $media = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function editMessageLiveLocation(
        $business_connection_id = null,
        $chat_id = null,
        $message_id = null,
        $inline_message_id = null,
        $latitude = null,
        $longitude = null,
        $live_period = null,
        $horizontal_accuracy = null,
        $heading = null,
        $proximity_alert_radius = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function stopMessageLiveLocation(
        $business_connection_id = null,
        $chat_id = null,
        $message_id = null,
        $inline_message_id = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function editMessageReplyMarkup(
        $business_connection_id = null,
        $chat_id = null,
        $message_id = null,
        $inline_message_id = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function deleteMessage(
        $chat_id = null,
        $message_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    
    public static function stopPoll(
        $business_connection_id = null,
        $chat_id = null,
        $message_id = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendSticker(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $sticker = null,
        $emoji = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getStickerSet(
        $name = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getCustomEmojiStickers(
        $custom_emoji_ids = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function uploadStickerFile(
        $user_id = null,
        $sticker = null,
        $sticker_format = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function createNewStickerSet(
        $user_id = null,
        $name = null,
        $title = null,
        $stickers = null,
        $sticker_type = null,
        $needs_repainting = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function addStickerToSet(
        $user_id = null,
        $name = null,
        $sticker = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setStickerPositionInSet(
        $sticker = null,
        $position = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function deleteStickerFromSet(
        $sticker = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function replaceStickerInSet(
        $user_id = null,
        $name = null,
        $old_sticker = null,
        $sticker = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setStickerEmojiList(
        $sticker = null,
        $emoji_list = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setStickerKeywords(
        $sticker = null,
        $keywords = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setStickerMaskPosition(
        $sticker = null,
        $mask_position = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setStickerSetTitle(
        $name = null,
        $title = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setStickerSetThumbnail(
        $name = null,
        $user_id = null,
        $thumbnail = null,
        $format = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setCustomEmojiStickerSetThumbnail(
        $name = null,
        $custom_emoji_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function deleteStickerSet(
        $name = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendPhoto(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $photo = null,
        $caption = null,
        $parse_mode = null,
        $caption_entities = null,
        $show_caption_above_media = null,
        $has_spoiler = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendAudio(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $audio = null,
        $caption = null,
        $parse_mode = null,
        $caption_entities = null,
        $duration = null,
        $performer = null,
        $title = null,
        $thumbnail = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendDocument(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $document = null,
        $thumbnail = null,
        $caption = null,
        $parse_mode = null,
        $caption_entities = null,
        $disable_content_type_detection = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendVideo(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $video = null,
        $duration = null,
        $width = null,
        $height = null,
        $thumbnail = null,
        $caption = null,
        $parse_mode = null,
        $caption_entities = null,
        $show_caption_above_media = null,
        $has_spoiler = null,
        $supports_streaming = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendAnimation(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $animation = null,
        $duration = null,
        $width = null,
        $height = null,
        $thumbnail = null,
        $caption = null,
        $parse_mode = null,
        $caption_entities = null,
        $show_caption_above_media = null,
        $has_spoiler = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendVoice(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $voice = null,
        $caption = null,
        $parse_mode = null,
        $caption_entities = null,
        $duration = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendVideoNote(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $video_note = null,
        $duration = null,
        $length = null,
        $thumbnail = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendPaidMedia(
        $business_connection_id = null,
        $chat_id = null,
        $star_count = null,
        $media = null,
        $caption = null,
        $parse_mode = null,
        $caption_entities = null,
        $show_caption_above_media = null,
        $disable_notification = null,
        $protect_content = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendMediaGroup(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $media = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendLocation(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $latitude = null,
        $longitude = null,
        $horizontal_accuracy = null,
        $live_period = null,
        $heading = null,
        $proximity_alert_radius = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendVenue(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $latitude = null,
        $longitude = null,
        $title = null,
        $address = null,
        $foursquare_id = null,
        $foursquare_type = null,
        $google_place_id = null,
        $google_place_type = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendContact(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $phone_number = null,
        $first_name = null,
        $last_name = null,
        $vcard = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendPoll(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $question = null,
        $question_parse_mode = null,
        $question_entities = null,
        $options = null,
        $is_anonymous = null,
        $type = null,
        $allows_multiple_answers = null,
        $correct_option_id = null,
        $explanation = null,
        $explanation_parse_mode = null,
        $explanation_entities = null,
        $open_period = null,
        $close_date = null,
        $is_closed = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function sendDice(
        $business_connection_id = null,
        $chat_id = null,
        $message_thread_id = null,
        $emoji = null,
        $disable_notification = null,
        $protect_content = null,
        $message_effect_id = null,
        $reply_parameters = null,
        $reply_markup = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function setMessageReaction(
        $chat_id = null,
        $message_id = null,
        $reaction = null,
        $is_big = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getUserProfilePhotos(
        $user_id = null,
        $offset = null,
        $limit = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
    
    public static function getFile(
        $file_id = null,
    ) 
    {
        return self::sendPostRequest(__METHOD__, get_defined_vars());
    }
}