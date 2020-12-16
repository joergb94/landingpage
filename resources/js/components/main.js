var main ={
    storeOrUpdate(){
       
   },
   detailItem(){

   },
   deleteOrRestored(){

   },
   changeStatus(){

   }, 
   message(){

   },
   pageChange(){

   },
   ListItems: async function (url) {
       $(".title-head").hide();
       $(".content-site").hide();
       $('#spinner2').show()
        const request = axios.get(url);
        return request
        .then(result => { 
            console.log(result); 
            $('#spinner2').hide();
            $('#navbarsExampleDefault').slideUp()
            $('#chevron-up').hide();
            $('#chevron-down').show();
            $(".title-head").slideDown(2000);
            return result})
        .catch(error => { console.error(error); return Promise.reject(error); });
    },
   
}

export default main