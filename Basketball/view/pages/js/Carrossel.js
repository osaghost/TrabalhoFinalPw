 
class Carrossel{

    constructor(count){
        this.count = count
        this.checar =  document.getElementById("radio1").checked 
    } 
    
         getCount(count){
            count = 1
            this.checar = true
            setInterval(function (){
                nextImage()
            },4000) 
            
            function nextImage(){
                count++
              if(count>4){
                  count = 1
              }
              document.getElementById("radio"+count).checked = true 
          }     
       
}
}

    var carrossel = new Carrossel()


