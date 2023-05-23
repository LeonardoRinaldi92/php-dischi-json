<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP-Disci-Json</title>
</head>
<body>
    <div id="app">
        <header>
            <div class="container h-100">
                <div class="d-flex align-items-center h-100">
                    <i class="fa-brands fa-spotify"></i>
                </div>
            </div>
        </header>
        <main>
            <div v-if="(this.arrayOnScreen != '')" class="overlay">
                <div class="row h-100">
                    <div class="col-12 text-end">
                        <i class="fa-regular fa-rectangle-xmark" @click="this.arrayOnScreen = ''"></i>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-center h-100">
                        <div class="inside box text-center text-white">
                            <img :src="this.arrayOnScreen.poster" style="width: 400px"alt="">
                            <h1>
                                {{this.arrayOnScreen.title}}
                            </h1>
                            <h3>
                                {{this.arrayOnScreen.year}}
                            </h3>
                            <h2>
                                {{this.arrayOnScreen.author}}
                            </h2>
                        </div>
                    </div>                   
                </div>
            </div>
            <div class="container" style="height: 90vh;">
                <div class="row align-items-center h-100  justify-content-between">
                    <div v-for="(element,index) in this.arrayDischi"  class="col-4">
                        <div class="card" >
                            <img :src="element.poster" alt="" @click="this.arrayOnScreen = element">
                            <h5 class="mt-2">
                                {{element.title}}
                            </h5>
                            <span class="desc">
                                {{element.author}}
                            </span>
                            <h5 class="desc">
                                {{element.year}}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>