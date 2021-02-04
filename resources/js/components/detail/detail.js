
export default {
    data () {
        return {
        dataItems:[],
        dataItem:[],
        dataSections:[],
        id:'',
        Section:[],
        Item_id:[],
        ItemTitle:'',
        SectionTitle:'',
        Title:'',
        Description:'',
        titleModal:'',
        imageDep:'',
        action:0,
        page:1,
        users: 1,
        pagination : {
                'total' : 0,
                'current_page' : 0,
                'per_page' : 0,
                'last_page' : 0,
                'from' : 0,
                'to' : 0,
            },
        offset : 3,
        criterion : 'date',
        status : 1,
        search : '',
        dateS : '',

        }
    },
    computed:{
        isActivedM: function(){
          return this.pagination.current_page;
        },
        pagesNumberM: function(){
            if(!this.pagination.to) {
                return [];
            }
            
            var from = this.pagination.current_page - this.offset; 
            if(from < 1) {
                from = 1;
            }

            var to = from + (this.offset * 2); 
            if(to >= this.pagination.last_page){
                to = this.pagination.last_page;
            }  

            var pagesArray = [];
            while(from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;             

        },
    },
    methods : {
        ListMain(page){
            let me = this;
            var myurl=$('#url').val();
            var url = myurl+'?page='+page+'&search='+this.search+'&criterion='+this.criterion+'&status='+this.status;
            axios.get(url)
            .then(function (response) {
                var respuesta= response.data;
                me.dataItems = respuesta.ItemDetails.data;
                me.dataSections = respuesta.Section;
                me.dataItem = respuesta.Item;
                me.ItemTitle = respuesta.Item.title;
                me.SectionTitle = respuesta.Section.name;
                me.pagination= respuesta.pagination;
            })
            .catch(function (error) {
                console.log(error);
            });
        },
        pageChangeM(page){
            let me = this;
            console.log(me.pagination.current_page)
            console.log(page)

            //Actualiza la página actual
            me.pagination.current_page = page;
            //Envia la petición para visualizar la data de esa página
            me.ListMain(page)
        },
        updateOrCreateM(action){
            
             let me = this;
             var myurl = '/itemDetails/add'
             var data = document.getElementById('formItemD')
             var form = new FormData(data)
                 form.append('item_id',this.Item_id)
               
            if (action == 2){
                form.append('id', me.id)
                myurl = '/itemDetails/update'    
            }

            axios.post(myurl,form).then(function (response) {

                me.closeModalM();
                me.ListMain('');

                 $.notify({
                            // options
                            title: "Success!",
                            message:"Exito",
                        },{
                            // settings
                            type: 'success'
                        });

            }).catch(function (error) {
                console.log(error.response.data.errors);
                var e = error.response.data.errors;
                  $.notifyClose();
                
                 $.each(e,function (k,message) {
                        $.notify({
                            // options
                            title: "Error!",
                            message:message,
                        },{
                            // settings
                            type: 'danger'
                        });
                    });
            })              
        },
        DeleteOrRestoreM(item){
            let me = this;
            var data = {
                'id': item.id,
                };
             var m = "Do you want delete this item?";
             var mt = "The item will be deleted";
             var btn = "Delete";


            if(item.deleted_at != null){
                 m = "Do you want restore this item?";
                 mt = "The item will be restored ";
                 btn = "Restore";
            }


                Swal.fire({
                    title: m,
                    text:  mt,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes,'+btn+'!'
                }).then((result) => {
                    if (result.value) {
                         axios.post('/itemDetails/deleteOrResotore',data).then(function (response) {
                                me.ListMain();
                                $.notify({
                                            // options
                                            title: "Success!",
                                            message:"Exito",
                                        },{
                                            // settings
                                            type: 'success'
                                        });

                            }).catch(function (error) {}) 
                    }
                }) 
        },
        openModalM(model, action, data = []){
           console.table(data)
            let me = this;
            switch(model){
                case 'modal':
                {
                    switch(action){
                        case 'add':
                        {
                            this.titleModal = 'New '+me.dataItem.name+' Item';
                            this.Title= '';
                            this.Description= '';
                            this.Item_id = me.dataItem.id;
                            this.action = 1;
                            break;
                        }
                        case 'update':
                        {
                            
                            this.titleModal = 'Edit '+me.dataItem.name+' Item';
                            this.id = data.id;
                            this.Title = data.name;
                            this.Description = data.description;
                            this.Item_id = me.dataItem.id;
                            this.action = 2;
                            break;
                        }
                    }
                    $("#myModalD").modal('show');
                }
            }
        },
        closeModalM(){
                let me = this;
                this.Title= '';
                this.Description= '';
                this.Item_id = me.dataItem.id;
                 $.notifyClose();
                $("#myModalD").modal('hide');
                $('#formItemD').trigger("reset");
        },
    },
    mounted () {
       this.ListMain(1);
    }
}