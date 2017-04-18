# codeigniter-3-generate-to-pdf
Library for generate html to PDF, by DOM-PDF

## Intro
Ini adalah sample code untuk meng-generate file html ke PDF. Pada sample ini saya menggunakan library DOM-PDF

Anda bisa mengunduh library dom-pdf di sini :
- https://code.google.com/p/dompdf/downloads/list
- https://github.com/dompdf/dompdf

Untuk mengakses file jarak jauh seperti gambar, anda perlu melakukan konfigurasi di bagian dompdf_config.inc.php

Default-nya bernilai false yang artinya anda belum bisa mengakses file jarak jauh
`` def("DOMPDF_ENABLE_REMOTE", false); ``

Agar anda bisa mengakses file jarak jauh anda perlu mengubah nilai false tadi menjadi true.
`` def("DOMPDF_ENABLE_REMOTE", true); ``

Pada sample yang saya buat, dompdf sudah saya set true.

## Instalasi
Di bagian controller, pertama anda harus me-load terlebih dahulu library-nya
`` $this->load->library("pdf"); ``

Tetapi pada sample ini saya telah me-load library-nya di file config/autoload.php

Library PDF diatas merupakan library tambahan yang sudah terintegrasi dengan dompdf, gunanya untuk memudahkan kita dalam meng-generate file pdf.

Pada saat anda menggunakan library tambahan di atas, anda hanya cukup membuat function sederhana seperti ini :

`` $this->pdf->load_view('example_to_pdf');
$this->pdf->render();
$this->pdf->stream("name-file.pdf"); ``

Selain itu anda juga bisa menambahkan $data pada :
`` $this->pdf->load_view('example_to_pdf', $data); ``

$data tersebut berfungsi untuk menampug data array yang bisa di panggil di dalam view, bentuk seperti itu tidak berbeda jauh dengan pada saat kita me-load view di codeigniter biasa. 
