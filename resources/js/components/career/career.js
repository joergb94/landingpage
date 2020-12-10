import main from '../main'
export default {
    data () {
        return {
        dataItems:[],
        dataSections:[],
        dataElements:[],
        id:'',
        Section:[],
        Title:'',
        Description:'',
        Footer:'',
        Element:'',
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
        isActivedC: function(){
          return this.pagination.current_page;
        },
        pagesNumberC: function(){
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
        ListCareer(page){
            let me = this;
            var url = '/items/4?page='+page+'&search='+this.search+'&criterion='+this.criterion+'&status='+this.status;
            axios.get(url)
            .then(function (response) {
                var respuesta= response.data;
                me.dataItems = respuesta.Items.data;
                me.dataSections = respuesta.Section;
                me.pagination= respuesta.pagination;
                me.dataElements = respuesta.Elements;
            })
            .catch(function (error) {
                console.log(error);
            });
        },
        pageChangeC(page){
            let me = this;
            console.log(me.pagination.current_page)
            console.log(page)

            //Actualiza la página actual
            me.pagination.current_page = page;
            //Envia la petición para visualizar la data de esa página
            me.ListCareer(page)
        },
        updateOrCreateC(action){
            
             let me = this;
             var myurl = '/items/add'
             var data = document.getElementById('formItemC')
             var form = new FormData(data)
                 form.append('section_id',this.Section)
               
            if (action == 2){
                form.append('id', me.id)
                myurl = '/items/update'    
            }

            axios.post(myurl,form).then(function (response) {

                me.closeModalC();
                me.ListCareer('');

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
        DeleteOrRestoreC(item){
            let me = this;
            var data = {
                'id': item.id,
                };
             var m = "¿Estas segurop  que deseas eliminar la juego programado?";
             var mt = "Se eliminara la programcion";
             var btn = "Eliminalo";


            if(item.deleted_at != null){
                 m = "¿Estas segurop  que deseas restaurar la juego programado?";
                 mt = "Se restaura la programcion";
                 btn = "Restauralo";
            }

                Swal.fire({
                    title: m,
                    text:  mt,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si,'+btn+'!'
                }).then((result) => {
                    if (result.value) {
                         axios.post('/items/deleteOrResotore',data).then(function (response) {
                                me.ListCareer();
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
        openModalC(model, action, data = []){
           console.table(data)
            let me = this;
            switch(model){
                case 'modal':
                {
                    switch(action){
                        case 'add':
                        {
                            this.titleModal = 'New '+me.dataSections.name+' Item';
                            this.Title= '';
                            this.Description= '';
                            this.Footer = '';
                            this.Element = '';
                            this.Section = me.dataSections.id;
                            this.action = 1;
                            break;
                        }
                        case 'update':
                        {
                            
                            this.titleModal = 'Edit '+me.dataSections.name+' Item';
                            this.id = data.id;
                            this.Title = data.title;
                            this.Element = data.element;
                            this.Description = data.description;
                            this.Footer = data.footer;
                            this.Section = me.dataSections.id;
                            this.action = 2;
                            break;
                        }
                    }
                    $("#myModalC").modal('show');
                }
            }
        },
        closeModalC(){
                this.titleModal = '';
                this.number_win= '';
                this.number_win2= '';
                this.game_id = '';
                this.date = '';
                 $.notifyClose();
                $("#myModalC").modal('hide');
        },
    },
    mounted () {
       this.ListCareer(1);
    }
}