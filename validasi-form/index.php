<?php
header('Access-Control-Origin: *');
header('Access-Control-Allow-Credential: true');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

echo "simulasi kirim data <hr>";

print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>..:: Sinau VueJS ::..</title>
    <script src="./../js/vue.js"></script>
</head>
<body>

<div class="" id="app">

</div>

<script>
 var vm = new Vue({
    el: '#app',
    data: {
        title: '',
        desc: '',
        authors: '',
        price: 0,
        categories: [],
        options: [
            { text: 'Graphic Design', value: '01' },
            { text: 'Mobile App', value: '02' },
            { text: 'Machine Learning', value: '03' },
            { text: 'AI for dummy', value: '04' },
            { text: 'Python for system analystic', value: '05' },
            { text: 'Learn Java for Student', value: '06' },
        ]
    },
    methods: {

    }
 })
 if (this.errors.length === 0) {
    //  persiapan data
    let formBook = this.$refs.formBook
    formData = new formData(formBook)

    // kirim data lewat server
    let xhttp = new XMLHttpRequest() // create object XMLHttp

    // definisi funsi ketika terjadi perubahan state
    xhttp.onreadystatechange = function() {
        // state ini menunjukkan data terkirim dan diterima server dengan baik
        if (this.readyState == 4 && this.status == 200) {
            // respon text dari server
            console.log(this.responseText)
        }
    }
    // sesuai dengan lokasi file index.php
    xhttp.open("POST", "http://localhost/vue/validasi-form/", true)

    // bisa juga langsung nama filenya yang berada dalam satu folder yang sama

    // xhttp.open("POST", "index.php", true)

    // kirim objek formData
    xhttp.send(formData)
 }
</script>
</body>
</html>