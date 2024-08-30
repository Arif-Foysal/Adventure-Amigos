
-- ### list the users you've chatted with
-- For each user, you need the last message's sender and receiver IDs, the text of the last message, the username, and the profile photo URL.
SELECT 
    u.user_id AS chat_with_user_id,
    CONCAT(u.fname, ' ', u.lname) AS user_name,
    u.profile_photo_url,
    m.message_text AS last_message,
    m.sent_at AS last_message_time,
    m.sender_id AS last_message_sender_id,
    m.receiver_id AS last_message_receiver_id
FROM 
    Messages m
JOIN 
    Users u ON (u.user_id = m.sender_id AND m.receiver_id = ?) 
           OR (u.user_id = m.receiver_id AND m.sender_id = ?)
JOIN 
    (SELECT 
        LEAST(sender_id, receiver_id) AS user1,
        GREATEST(sender_id, receiver_id) AS user2,
        MAX(sent_at) AS last_message_time
     FROM Messages
     WHERE sender_id = ? OR receiver_id = ?
     GROUP BY user1, user2
    ) lm ON lm.user1 = LEAST(m.sender_id, m.receiver_id)
        AND lm.user2 = GREATEST(m.sender_id, m.receiver_id)
        AND lm.last_message_time = m.sent_at
ORDER BY 
    m.sent_at DESC;

-- ### Insert data into messages table
INSERT INTO `Messages` (`sender_id`, `receiver_id`, `message_text`, `status`)
VALUES (1, 2, 'Hello, how are you?', 'sent');