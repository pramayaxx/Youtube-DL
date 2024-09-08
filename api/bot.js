const fetch = require('node-fetch');

// Your Telegram Bot token (add this as an environment variable later)
const BOT_TOKEN = process.env.BOT_TOKEN;
const TELEGRAM_API_URL = `https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`;

// Vercel serverless function
module.exports = async (req, res) => {
  if (req.method === 'POST') {
    // Parse the incoming webhook from Telegram
    const body = JSON.parse(req.body);
    const chatId = body.message.chat.id;
    const messageText = body.message.text;
    
    // Check if message contains a Terabox link
    let responseMessage;
    let url;

    if (messageText.includes("terasharelink.com") || messageText.includes("terabox.app") || messageText.includes("teraboxapp.com")) {
      url = `https://teraboxapi2.darkhacker7301.workers.dev/?url=${messageText}`;
    } else {
      url = `https://pvtteraboxapi.darkhacker7301.workers.dev/?url=${messageText}`;
    }

    try {
      // Send a processing message to the user
      await fetch(TELEGRAM_API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          chat_id: chatId,
          text: "<b><i>Processing your Terabox link...</i></b>",
          parse_mode: 'HTML'
        })
      });

      // Fetch the Terabox API response
      const response = await fetch(url);
      const data = await response.json();

      const resolutions = data.response[0].resolutions;
      const fastDownload = resolutions["Fast Download"];
      const hdVideoUrl = resolutions["HD Video"];
      const thumbnail = data.response[0].thumbnail;
      const title = data.response[0].title;

      // Send the video and options to the user
      await fetch(TELEGRAM_API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          chat_id: chatId,
          photo: thumbnail,
          caption: `💬 <b>Title:</b> <code>${title}</code>\nMade with ❤️ by @Itz_Ashlynn`,
          parse_mode: 'HTML',
          reply_markup: JSON.stringify({
            inline_keyboard: [
              [{ text: "🔥 Fast Download", url: fastDownload }],
              [{ text: "🤗 HD Video", url: hdVideoUrl }],
              [{ text: "All Saver Bot", url: "t.me/ARAllSaverBot" }]
            ]
          })
        })
      });

      // Send a fast download video link if necessary
      await fetch(`https://api.telegram.org/bot${BOT_TOKEN}/sendVideo`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          chat_id: chatId,
          video: fastDownload
        })
      });

      res.status(200).json({ status: 'OK' });
    } catch (error) {
      console.error('Error:', error);

      // Send error message to the user
      await fetch(TELEGRAM_API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          chat_id: chatId,
          text: '❌ <b>Error processing your Terabox link.</b>',
          parse_mode: 'HTML'
        })
      });

      res.status(500).json({ error: 'Failed to process request' });
    }
  } else {
    res.status(405).json({ message: 'Method Not Allowed' });
  }
};
