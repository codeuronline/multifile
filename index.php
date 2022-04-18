<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href=https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.3.0/font-awesome-animation.min.css"
        integrity="sha512-Po8rrCwchD03Wo+2ibHFielZ8luDAVoCyE9i6iFMPyn9+V1tIhGk5wl8iKC9/JfDah5Oe9nV8QzE8HHgjgzp3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
    <title>test page</title>
</head>

<body>
    <form action="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="image0">
                <label for="image7"><i class="bi bi-house-fill"></i></i>
                </label>
                <input type="text" height="20" size="40" name="Titre" id="" placeholder="Le nom du logement ">
            </div>
            <div class="image1">
                <label for="image1">
                    <input type="file" onChange="handleFiles(files,0)" name="image1" id="image1" multiple>
                    <span id="preview0">
                        <img width="400px" height="400px" src="vide.jpg" alt="">
                    </span>
                </label>
            </div>
            <div class="image2">
                <label for="image2">
                    <input type="file" onChange="handleFiles(files,1)" name="image2" id="image2">
                    <span id="preview1">
                        <img width=" 200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image3">
                <label for="image3">
                    <input type="file" onChange="handleFiles(files,2)" name="image3" id="image3">
                    <span id="preview2">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image4">
                <label for="image4">
                    <input type="file" onChange="handleFiles(files,3)" name="image4" id="image4">
                    <span id="preview3">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image5">
                <label for="image5">
                    <input type="file" onChange="handleFiles(files,4)" name="image5" id="image5">
                    <span id="preview4">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image6">
                <label for="image6">
                    <input type="file" onChange="handleFiles(files,5)" name="image6" id="image6">
                    <span id="preview5">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="option">

            </div>
            <div class="action">
                <button type="submit"><i class="fa-solid fa-toilet-paper"></i></button>
                <button type="reset"><i class="fa-solid fa-hand-peace"></i></button>
            </div>
        </div>

    </form>
</body>

<script type="text/javascript">
let nbLimit = 6;

function handleFiles(files, valeur) {
    let nbFiles = files.length;
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var imageType = /^image\//;
        if (!imageType.test(file.type)) {
            continue;
        }
        // fichier 0
        var img = document.createElement("img");
        img.classList.add("obj");
        img.file = file;
        if (files[i] && (i < nbLimit)) {
            switch (i) {
                case 0:
                    //image0
                    if (nbFiles == 1) {
                        switch (valeur) {
                            case 0:
                                preview0.innerHTML = "";
                                preview0.appendChild(img);
                                break;
                            case 1:
                                preview1.innerHTML = "";
                                preview1.appendChild(img);
                                break;
                            case 2:
                                preview2.innerHTML = "";
                                preview2.appendChild(img);
                                break;
                            case 3:
                                preview3.innerHTML = "";
                                preview3.appendChild(img);
                                break;
                            case 4:
                                preview4.innerHTML = "";
                                preview4.appendChild(img);
                                break;
                            case 5:
                                preview5.innerHTML = "";
                                preview5.appendChild(img);
                                break;
                        }
                    } else {
                        preview0.innerHTML = "";
                        preview0.appendChild(img);
                        break;
                    }
                    case 1:
                        //image1
                        preview1.innerHTML = "";
                        preview1.appendChild(img);
                        break;

                    case 2:
                        //image2
                        preview2.innerHTML = "";
                        preview2.appendChild(img);
                        break;
                    case 3:
                        //image3
                        preview3.innerHTML = "";
                        preview3.appendChild(img);
                        break;
                    case 4:
                        //image4
                        preview4.innerHTML = "";
                        preview4.appendChild(img);
                        break;
                    case 5:
                        //image4
                        preview5.innerHTML = "";
                        preview5.appendChild(img);
                        break;
            }
            var reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                };
            })(img);
            reader.readAsDataURL(file);
        }
    }
}

// function handleMultiFiles(files) {
//     nbFile = files.length;
//     console.log(nbFile);
//     for (let j = 0; j < nbFile; j++) {
//         if (j < nbLmit) {
//             (j == 0) ? document.getElementById("preview0").innerHTML = ' I image0': null;
//             (j == 1) ? document.getElementById("preview1").innerHTML = ' I image1': null;
//             (j == 2) ? document.getElementById("preview2").innerHTML = ' I image2': null;
//             (j == 3) ? document.getElementById("preview3").innerHTML = ' I image3': null;
//             (j == 4) ? document.getElementById("preview4").innerHTML = ' I image4': null;
//             (j == 5) ? document.getElementById("preview5").innerHTML = ' I image5': null;
//             (j == 6) ? document.getElementById("preview6").innerHTML = ' I image6': null;
//         }

//         let img = document.createElement("img");
//         img.classList.add("obj");
//         img.file = files[j];
//         console.log(img.file);
//         if (files.length > 0) {
//             (j == 0) ? document.getElementById("preview0").appendChild(img): null;
//             (j == 1) ? document.getElementById("preview1").appendChild(img): null;
//             (j == 2) ? document.getElementById("preview2").appendChild(img): null;
//             (j == 3) ? document.getElementById("preview2").appendChild(img): null;
//             (j == 4) ? document.getElementById("preview3").appendChild(img): null;
//             (j == 5) ? document.getElementById("preview4").appendChild(img): null;
//             (j == 6) ? document.getElementById("preview5").appendChild(img): null;
//         }
//         var reader = new FileReader();
//         reader.onload = (function(aImg) {
//             return function(e) {
//                 aImg.src = e.target.result;
//             };
//         })(img);
//         reader.readAsDataURL(file);
//     }
// }



// function handleFiles(files, valeur) {
//     var imageType = /^image\//;
//     for (var i = 0; i < files.length; i++) {
//         console.log("nb fichier : " + files.length);
//         console.log("fichier" + i);
//         var file = files[i];
//         if (!imageType.test(file.type)) {
//             alert("veuillez sélectionner une image");
//         } else {
//             if (i == 0) {
//                 var img = document.createElement("img");
//                 img.classList.add("obj");
//                 img.file = files[i];
//                 switch (valeur) {
//                     case 1:
//                         preview1.innerHTML = '';
//                         if (files.length > 1) {
//                             for (var j = 2; j <= files.length; j++) {
//                                 console.log(j);
//                                 if (j <= nbLmit) {
//                                     console.log("initialise preview: " + j);
//                                     (j == 2) ?? preview2.innerHTML = 'image2';
//                                     (j == 3) ? preview3.innerHTML = 'image3': null;
//                                     (j == 4) ? preview4.innerHTML = 'image4': null;
//                                     (j == 5) ? preview5.innerHTML = 'image5': null;
//                                     (j == 6) ? preview6.innerHTML = 'image6': null;
//                                 }
//                             }
//                         }

//                         break;
//                     case 2:
//                         preview2.innerHTML = 'unique image2';

//                         break;
//                     case 3:
//                         preview3.innerHTML = 'unique image3';
//                         break;
//                     case 4:
//                         preview4.innerHTML = 'unique image4';
//                         break;
//                     case 5:
//                         preview5.innerHTML = 'unique image5';
//                         break;
//                     case 6:
//                         preview6.innerHTML = 'unique image6';
//                         break;

//                 }
//                 var img = document.createElement("img");
//                 img.classList.add("obj");
//                 img.file = files[i];
//                 switch (valeur) {
//                     case 0:
//                         console.log("chargement de preview:" + valeur)
//                         var img = document.createElement("img");
//                         img.classList.add("obj");;
//                         if (files.length > 1) {
//                             for (var j = 1; j <= files.length; j++) {
//                                 if (j <= nbLmit) {
//                                     switch (j) {
//                                         case 1:
//                                             preview0.innerHTML = preview0.appendChild(img);
//                                         case 2:
//                                             preview1.innerHTML = preview1.appendChild(img);
//                                             break;
//                                         case 3:
//                                             preview2.innerHTML = preview2.appendChild(img);
//                                             break;
//                                         case 4:
//                                             preview1.innerHTML = preview1.appendChild(img);
//                                             break;
//                                         case 5:
//                                             preview2.innerHTML = preview2.appendChild(img);
//                                             break;
//                                     }

//                                 }
//                             }
//                         }
//                         break;
//                     case 2:
//                         preview2.appendChild(img);
//                         break;
//                     case 3:
//                         preview3.appendChild(img);
//                         break;
//                     case 4:
//                         preview4.appendChild(img);
//                         break;
//                     case 5:
//                         preview5.appendChild(img);
//                         break;
//                     case 6:
//                         preview6.appendChild(img);
//                         break;
//                 }

//                 var reader = new FileReader();
//                 reader.onload = (function(aImg) {
//                     return function(e) {
//                         aImg.src = e.target.result;
//                     };
//                 })(img);
//                 reader.readAsDataURL(file);
//             }
//         }
//     }
// }
</script>

</html>