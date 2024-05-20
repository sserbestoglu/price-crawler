const puppeteer = require('puppeteer');

(async () => {
    const query = process.argv[2];
    const url = `https://www.google.com.tr/search?tbm=shop&q=${encodeURIComponent(query)}`;

    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto(url, { waitUntil: 'networkidle2' });

    const prices = await page.evaluate(() => {
        return Array.from(document.querySelectorAll('.QIrs8 span'))
            .map(span => span.innerText)
            .filter(text => text.includes('₺'))
            .map(text => parseFloat(text.replace('₺', '').replace(/\./g, '').replace(',', '.')));
    });

    await browser.close();

    if (prices.length > 0) {
        const sum = prices.reduce((acc, price) => acc + price, 0);
        const avg = sum / prices.length;
        const formatter = new Intl.NumberFormat('tr-TR', { style: 'currency', currency: 'TRY' }).format(avg);
        console.log('Average price for ' + query + ':  '
        + formatter);
    } else {
        console.log('No prices found.');
    }
})();
