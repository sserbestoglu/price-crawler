# Shopping Price Avarage Search Crawler

Bu proje, Google Shopping'de yapılan aramalarda ürün fiyatlarını alıp ortalamasını hesaplayan bir Laravel uygulamasıdır. Kullanıcılar, arama kelimesi girerek Google Shopping'deki fiyatların ortalamasını görebilirler.

## Özellikler

- Kullanıcı arayüzü üzerinden arama yapabilme
- Google Shopping sonuçlarındaki fiyatları çekme
- Çekilen fiyatların ortalamasını hesaplama

## Kurulum

### Gereksinimler

- PHP >= 7.4
- Node.js ve npm
- Composer
- Laravel >= 8.0

### Adımlar

1. **Projeyi Klonlayın**

    ```bash
    git clone https://github.com/sserbestoglu/price-crawler.git
    cd price-crawler
    ```

2. **Gerekli Paketleri Kurun**

    PHP bağımlılıklarını Composer ile kurun:

    ```bash
    composer install
    ```

    Node.js bağımlılıklarını npm ile kurun:

    ```bash
    npm install
    ```
3. **.env Dosyasını Oluşturun**

    `.env.example` dosyasını kopyalayarak `.env` dosyasını oluşturun ve gerekli ayarları yapın:

    ```bash
    cp .env.example .env
    ```

    Ardından uygulama anahtarını oluşturun:

    ```bash
    php artisan key:generate
    ```

4. **Puppeteer Kurulumu**

    Puppeteer'ı npm ile kurun:

    ```bash
    npm install puppeteer
    ```

## Kullanım

1. **Sunucuyu Başlatın**

    Laravel geliştirme sunucusunu başlatın:

    ```bash
    php artisan serve
    ```

    Sunucu başlatıldığında, uygulama `http://localhost:8000` adresinde çalışacaktır(8001,8002,... olabilir).

2. **Arama Yapın**

    Tarayıcınızda `http://localhost:8000/search` adresine gidin. Arama formuna istediğiniz ürünü yazın ve arama yapın. Sonuçlar ve ortalama fiyat hesaplaması gösterilecektir.

## Yapı

- `app/Http/Controllers/HomeController.php`: Arama işlemlerini yöneten kontrolör.
- `resources/views/search/home.blade.php`: Arama formunu içeren Blade şablonu.
- `resources/views/search/results.blade.php`: Arama sonuçlarını gösteren Blade şablonu.
- `puppeteer.js`: Puppeteer ile Google Shopping sonuçlarını çeken Node.js betiği.
- `routes/web.php`: Web rotalarını tanımlayan dosya.

## Katkıda Bulunma

Katkıda bulunmak isterseniz, lütfen bir `pull request` gönderin. Her türlü katkı memnuniyetle karşılanır.
