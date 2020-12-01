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
       $('#spinner2').show()
        const request = axios.get(url);
        return request
        .then(result => { 
            console.log(result); 
            $('#spinner2').hide()
            return result})
        .catch(error => { console.error(error); return Promise.reject(error); });
    },
   
}

export default main