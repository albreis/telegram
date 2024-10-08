<?php

namespace Albreis\Telegram;

use Albreis\Router;

class Helpers {

    public static function getUserDataById($chat_id, $user_id) {
        $result = Bot::getChatMember(
            chat_id: $chat_id,
            user_id: $user_id
        );
        return $result['result'] ?? null;
    }


    public static function sendGroupMessage($chat_id, $text) {
        $result = Bot::sendMessage(
            chat_id: $chat_id,
            text: $text
        );
        return $result['result'] ?? null;
    }

    public static function removeUserFromGroup($chat_id, $user_id)
    {
        $result = Bot::kickChatMember(
            chat_id: $chat_id,
            user_id: $user_id
        );
        return $result['result'] ?? null;
    }

    public static function sendUserMessage($chat_id, $user_id, $text) {
        $result = Bot::sendMessage(
            text: $text,
            chat_id: $chat_id,
            reply_to_message_id: $user_id
        );        
        return $result['result'] ?? null;
    }


    public static function banUserPermanently($chat_id, $user_id) {
        $result = Bot::kickChatMember(
            chat_id: $chat_id,
            user_id: $user_id
        );
        return $result['result'] ?? null;
    }

    public static function isGroupOwner($chat_id, $user_id)
    {
        $data = Bot::getChatMember(
            chat_id: $chat_id,
            user_id: $user_id
        );

        if ($data['ok']) {
            return $data['result']['status'] === 'creator' || $data['result']['status'] === 'administrator';
        } 
        
        return false;
    }

    public static function getChatInfo($chat_id) {
        $result = Bot::getChat(
            chat_id: $chat_id
        );
        return $result['result'] ?? null;
    }

    public static function getUserName($member) {
        $name = $member['first_name'];
        if(isset($member['last_name']) && !empty($member['last_name'])) {
            $name .= " {$member['last_name']}";
        }
        if(isset($member['username']) && !empty($member['username'])) {
            $name = "@{$member['username']}";
        }
        return $name;
    }

    public static function getChatAdministrators($chat_id)
    {
        $result = Bot::getChatAdministrators(
            chat_id: $chat_id
        );

        return $result['ok'] ?? false;;
    }

    public static function createInviteLink($chat_id) {
        
        $result = Bot::createChatInviteLink(
            chat_id: $chat_id,
            expire_date: time() + (3600 * 24),
            member_limit: 5
        );

        return $result;
    }

    public static function revokeInviteLink($chat_id, $invite_link_id) {
        
        $result = Bot::revokeChatInviteLink(
            chat_id: $chat_id,
            invite_link_id: $invite_link_id
        );

        return $result['ok'] ?? false;
    }

    public static function deleteMessage($chat_id, $message_id) {
        
        $result = Bot::deleteMessage(
            chat_id: $chat_id,
            message_id: $message_id
        );

        return $result['ok'] ?? false;
    }

    public static function watch($command, $callback, $params = []) {
        if(!is_callable($callback)) {
            return;
        }
        $text = trim(Bot::$update['message']['text']);
        $router = new Router(uri: trim($text));
        return $router->all(
            $command, 
            $callback, 
            true,
            true
        );
    }
}