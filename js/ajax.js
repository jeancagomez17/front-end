// (() => {
//     const xhr = new XMLHttpRequest(); //instancia 
//     $xhr = document.getElementById('xhr');
//     $fragment = document.createDocumentFragment();

    

//     xhr.addEventListener("readystatechange", (e) => {
//         if(xhr.readyState !== 4){
//             return;
//         }
//         console.log(xhr);
//        if(xhr.status >= 200 && xhr.status < 300){
//         console.log("exito");
//         console.log(xhr.responseText);

//         let json = JSON.parse(xhr.responseText);
//         console.log(json);
//         json.forEach((el) => {
//             const $li = document.createElement("li");
//             $li.innerHTML = `${el.name} -- ${el.email} -- ${el.phone}`;
//             $fragment.appendChild($li);
//           });
    
//           xhr.appendChild($fragment);
//        }else{
//         console.log("error");
//        }

        
//     }) //asignacion de los eventos 
//     xhr.open('GET', 'https://jsonplaceholder.typicode.com/users'); // abrir la peticion, con el metodo y la url que vamos a acceder
//     xhr.send();//enviar la peticion 

// })();
