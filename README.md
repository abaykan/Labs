# Labs

Repository ini berisi file-file vulnerable terhadap bug tertentu yang saya jadikan demo pada artikel yang saya tulis di [abaykan.com](https://abaykan.com/)

![Labs](https://github.com/abaykan/Labs/blob/master/pic.png?raw=true )

## Local File Inclusion
[Local File Inclusion](https://abaykan.com/local-file-inclusion/) berarti akses tidak sah ke file yang ada di sistem. Kerentanan ini memungkinkan penyerang mendapatkan akses ke file sensitif di server, dan itu mungkin juga menyebabkan mendapatkan shell.

![Local File Inclusion](https://abaykan.com/wp-content/uploads/2019/01/1-1024x571.png)

Postingan tersebut menjelaskan cara kerja, contoh source-code yang vuln, teknik bypass filter dan juga Cheatsheet yang bisa berguna pada saat melakukan Local File Inclusion.
POST: [Local File Inclusion](https://abaykan.com/local-file-inclusion/).

## Cross Site Scripting
[Cross Site Scripting (XSS)](https://abaykan.com/cross-site-scripting-dasar/) pada dasarnya menyuntikkan skrip atau HTML ke halaman web, seberapa burukkah akibatnya? Jika kita melihat XSS sebagai bug yang tidak berbahaya, sepertinya harus dipikir ulang. Jika Google saja membayar hingga `$3,133.7` untuk satu bug XSS, itu berarti itu sangat buruk, kan?

![Cross Site Scripting](https://abaykan.com/wp-content/uploads/2019/01/2-1.png)

Pada artikel tersebut saya menjelaskan dasar - dasar XSS. Terkait apa itu XSS, contoh source-code yang vuln serta sedikit cara pencegahan.
POST: [Cross Site Scripting: Dasar - Dasar XSS](https://abaykan.com/cross-site-scripting-dasar/).
