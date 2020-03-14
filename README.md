## Panduan Instalasi Project
Clone atau Download Project dalam Repository ini.
1. Masuk ke terminal/cmd dan masuk ke folder ProjectAbiyyu (contoh : cd ProjectAbiyyu)
2. Ketik composer install lalu tunggu hingga selesai
3. Ketik php artisan key:generate
4. Ketik php artisan serve
5. Masuk ke browser lalu ketik localhost:8000 lalu tekan enter

================================================================================

## Soal 1 ( Algorithmic Test )
- url : http://localhost:8000/yml_to_json

## Soal 2 ( Backend Engineering Test )
- Endpoint province http://localhost:8000/api/province ... ( Parameter menggunakan get ?id=x )
- Endpoint city http://localhost:8000/api/city ... ( Parameter menggunakan get ?provinceID=x&cityID=x )

## Soal 3 ( Knowledge and Experience )
1. Apa tantangan terbesar yang pernah Anda temui saat membuat web application dari sisi engineering dan bagaimana menyelesaikan permasalahan tersebut?. <br>
Jawaban : Tantangan terbesar saya adalah ketika user meminta fitur yang belum pernah saya buat sebelumnya, dan saya harus mempelajarinya dahulu & membuat project simulasi sesuai dengan fitur project tersebut lalu saya bisa mengimplementasikan fitur tersebut.

2. Apakah Anda sudah mengetahui tentang clean code? Bagaimana implementasi clean code pada project Anda?. <br>
Jawaban : Clean code adalah sebuah cara menulis code agar terlihat rapih & bisa dibaca oleh programmer lain dan juga untuk memudahkan membuat dokumentasi teknis. Implementasinya dalam project saya adalah logic pada program tidak diletakkan pada controller, tetapi diletakkan di layer service, sehingga controller hanya menerima input dan output saja / logic sudah di handle pada layer service. 

3. Apakah Anda menggunakan Git workflow dalam pengerjaan project? Jika ya, jelaskan bagaimana Git workflow yang Anda terapkan. <br>
Jawaban : Tidak, tetapi saya menggunakan source code management SVN server secara local.

4. Apa yang anda ketahui dengan design pattern? Jika pernah menggunakan, jelaskan design pattern apa saja yang biasanya digunakan untuk menyelesaikan masalah software engineering di web application. <br>
Jawaban : Design patern merupakan pola design logic dari sebuah aplikasi, design patern yang saya ketahui adalah pola MVC, repository patern, service patern.

5. Apa anda bersedia ditempatkan onsite di Malang? Jika memang harus remote, bagaimana pengaturan waktu & availability dalam komunikasi dan kolaborasi pengerjaan project?. <br>
Jawaban : Saya bersedia onsite, jika harus remote pengaturan waktunya adalah menyesuaikan jam kerja di PT. DOT atau bisa dengan hitungan jam per minggu.
