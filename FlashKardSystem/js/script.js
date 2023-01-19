// $(function()
// {
    


//     class Word {
//         constructor(stranger, mean)
//          {
//           this.stranger = stranger;
//           this.mean = mean;
//         }
//       }
      
//       let quotes=[];

    





    
// var ajaxhttp=new XMLHttpRequest();
// var url="json.json";
// ajaxhttp.open("GET",url,true);
// ajaxhttp.setRequestHeader("content-type","application/json");

// ajaxhttp.onreadystatechange=function()
// {
//     if(ajaxhttp.readyState== 4 &&ajaxhttp.status==200)
//     {
//         var jcontent=JSON.parse(ajaxhttp.responseText);
//         for(var myObj in jcontent)
//         {
//             let word=new Word(jcontent[myObj].stranger,jcontent[myObj].mean);
//             quotes.push(word);
//         }
//         console.log(quotes.length);
     
 
//     }
// }
// ajaxhttp.send();
// console.log(ajaxhttp);





$(document).ready(function()
{
  








    class Word
    {
        constructor(stranger, mean)
        {
          this.stranger = stranger;
          this.mean = mean;
        }
      }
     
      let quotes=[];
    
    
    function jData()
    {
    
            
    
    
    var ajaxhttp=new XMLHttpRequest();
    var url="getCards.php";
    
    ajaxhttp.open("GET",url,true);
    ajaxhttp.setRequestHeader("content-type","application/json");
    
    ajaxhttp.onreadystatechange=function()
    {
       
        if(ajaxhttp.readyState== 4 &&ajaxhttp.status==200)
        {
            var jcontent=JSON.parse(ajaxhttp.responseText);
            for(var myObj in jcontent)
             {
                 let word=new Word(jcontent[myObj].stranger,jcontent[myObj].mean);
              
                quotes.push(word);
               
            }
          
           
           
            
        }
        
    }
    ajaxhttp.send(); 
    
    
    
    }
    
    jData();
    


    


    let i=0;
    let clicked=false;
    
    var box=$(".flashcard");
   
   
   




   
    box.on("click",function()
    { 
        box.fadeOut(function()
        {    
            if(clicked==false)
            {
                console.log(quotes[0].stranger);
                $(this).html("<h1>"+quotes[i].stranger+"</h1>").fadeIn();
                clicked=true;
               
               
            }
            else
            {
                $(this).html("<h1>"+quotes[i].mean+"</h1>").fadeIn();
                clicked=false;
            }
      
        });

     

    });

    $("#next").click(function()
    {
        if(i<quotes.length-1)
        {
            i++;
            box.fadeOut(function()
            {    
              $(this).html("<h1>"+quotes[i].stranger+"</h1>").fadeIn();
            });
            clicked=true;
        }
        else
        {
            i=0;
        }
        console.log(i);
      

    
    });
    
    $("#previous").click(function()
    {
      
        if(i>0)
        {  
            i--;
            box.fadeOut(function()
            {    
              $(this).html("<h1>"+quotes[i].stranger+"</h1>").fadeIn();
            });
            clicked=true;
        }
        else
        {
            i=quotes.length-1;
        }
        console.log(i);
    
    });

    $(".button").on("mouseenter",function()
    {
        
        $(this).addClass("intro");
    
    });
    $(".button").on("mouseleave",function()
    {
        
        $(this).removeClass("intro");
    
    });

 

    






 




});


















































        

        
 

