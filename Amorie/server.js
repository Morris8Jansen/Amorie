const express = require('express');
const path = require('path');
const { createMollieClient } = require('@mollie/api-client');

const mollie = createMollieClient({ apiKey: 'your-api-key-here' });

const app = express();
const port = 3000;

app.listen(port, () => {
    console.log(`Server listening on port ${port}`);
});

app.post('/create-payment', async (req, res) => {
    try {
        const payment = await mollie.payments.create({
            amount: {
                value: '10.00',
                currency: 'EUR',
            },
            description: 'My first payment',
            redirectUrl: 'https://your-website.com/payment-successful',
            webhookUrl: 'https://your-website.com/webhooks/mollie',
        });

        res.json({ payment });
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
});

app.use(express.static(path.join(__dirname, 'public')));

app.listen(port, () => {
    console.log(`Server listening on port ${port}`);
});

