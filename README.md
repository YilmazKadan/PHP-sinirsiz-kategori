# PHP-sinirsiz-kategori
PHP Programlama Programlama Dili'nde sınırsız alt-kategori algoritması.

# İçerisinde ne var ?
Proje içerisinde sınırsız bir şekilde oluşturulabilen altkategori işleminin , veritabanından çekilen dizi şeklindeki kategorileri üst kategori id bilgisine göre 
**özyinelemeli fonksiyon** yardımıyla tamamen hiyerarşik ve dinamik bir şekilde yeni bir dizide oluşturulması işlemi.

# Yapılandırma.
Elimizde bulunan **category.sql** dosyasını phpmyadmine veya farklı bir araca yükleyin , ardından kendi veritabanı bilgilerinize göre **conn.php** dosyasındaki gerekli alanları güncelleyin.

Algoritma **Cashing mantığı ile kodlanmıştır , sürekli olarak veritabanına sorgu yollamadığı için , veritabanı sorgu maliyeti minumumdur.
