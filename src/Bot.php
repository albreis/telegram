<?php namespace Albreis\Telegram;

/**
 * Undocumented class
 *
 * @category Category
 * @package  Package
 * @author   ER Soluções Web LTDA <contato@ersolucoesweb.com.br>
 * @license  MIT  https://ersolucoesweb.com.br
 * @link     https://ersolucoesweb.com.br
 */
class Bot implements BotInterface {

    use Request;
    
    private static $token;

    public static function init(string $token) 
    {
        self::$token = $token;
    }

    public static function sendChatAction(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function banChatMember(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function unbanChatMember(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function restrictChatMember(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function promoteChatMember(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setChatAdministratorCustomTitle(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function banChatSenderChat(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function unbanChatSenderChat(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setChatPermissions(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function exportChatInviteLink(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function createChatInviteLink(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function editChatInviteLink(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function createChatSubscriptionInviteLink(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function editChatSubscriptionInviteLink(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function revokeChatInviteLink(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function approveChatJoinRequest(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function declineChatJoinRequest(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setChatPhoto(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function deleteChatPhoto(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setChatTitle(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setChatDescription(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function pinChatMessage(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function unpinChatMessage(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function unpinAllChatMessages(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function leaveChat(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getChat(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getChatAdministrators(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getChatMemberCount(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getChatMember(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setChatStickerSet(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function deleteChatStickerSet(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setChatMenuButton(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getChatMenuButton(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getUserChatBoosts(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }


        
    public static function getForumTopicIconStickers(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function createForumTopic(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function editForumTopic(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function closeForumTopic(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function reopenForumTopic(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function deleteForumTopic(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function unpinAllForumTopicMessages(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function editGeneralForumTopic(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function closeGeneralForumTopic(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function reopenGeneralForumTopic(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function hideGeneralForumTopic(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function unhideGeneralForumTopic(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function unpinAllGeneralForumTopicMessages(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function answerCallbackQuery(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getBusinessConnection(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setMyCommands(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function deleteMyCommands(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getMyCommands(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setMyName(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getMyName(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setMyDescription(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getMyDescription(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setMyShortDescription(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getMyShortDescription(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setMyDefaultAdministratorRights(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getMyDefaultAdministratorRights(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }

    public static function getMe() 
    {
        return self::sendPostRequest(__FUNCTION__);
    }
    
    public static function logOut() 
    {
        return self::sendPostRequest(__FUNCTION__);
    }
    
    public static function close() 
    {
        return self::sendPostRequest(__FUNCTION__);
    }
    
    public static function sendMessage(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function forwardMessage(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function forwardMessages(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function copyMessage(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function copyMessages(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function editMessageText(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function editMessageCaption(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function editMessageMedia(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function editMessageLiveLocation(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function stopMessageLiveLocation(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function editMessageReplyMarkup(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function deleteMessage(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }


        
    public static function stopPoll(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendSticker(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getStickerSet(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getCustomEmojiStickers(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function uploadStickerFile(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function createNewStickerSet(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function addStickerToSet(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setStickerPositionInSet(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function deleteStickerFromSet(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function replaceStickerInSet(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setStickerEmojiList(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setStickerKeywords(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setStickerMaskPosition(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setStickerSetTitle(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setStickerSetThumbnail(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setCustomEmojiStickerSetThumbnail(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function deleteStickerSet(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendPhoto(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendAudio(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendDocument(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendVideo(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendAnimation(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendVoice(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendVideoNote(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendPaidMedia(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendMediaGroup(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendLocation(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendVenue(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendContact(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendPoll(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function sendDice(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function setMessageReaction(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getUserProfilePhotos(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
    
    public static function getFile(...$params) 
    {
        return self::sendPostRequest(__FUNCTION__, $params);
    }
}