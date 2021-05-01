// $(document).ready(function () {
//     function Next(){ 
//         $(".prev").click(function(){
//             let slideShow = document.getElementsByClassName("slider");
//             for(let i = 0; i < slideShow.length; i++){
//                 if(slideShow[i].classList.contains("active")){
//                     if(i == 0){
//                         slideShow[i].classList.remove("active");
//                         slideShow[slideShow.length - 1].classList.add("active");
//                         break;
//                     }
//                     else{
//                         slideShow[i].classList.remove("active");
//                         slideShow[i-1].classList.add("active");
//                         break; 
//                     }   
//                 }
                
//             }
//         });
//     }
//     function Prev(){
//         $(".next").click.(function(){
//             let slideShow = document.getElementsByClassName("slider");
//             for(let i = 0; i < slideShow.length; i++){
//                 if(slideShow[i].classList.contains("active")){
//                     if(i == slideShow.length - 1){
//                         slideShow[i].classList.remove("active");
//                         slideShow[0].classList.add("active");
//                         break;
//                     }
//                     else{
//                         slideShow[i].classList.remove("active");
//                         slideShow[i+1].classList.add("active");
//                         break;
//                     }
//                 }
//             }
//         });
//     }
//     Prev();
//     Next();
    
// });