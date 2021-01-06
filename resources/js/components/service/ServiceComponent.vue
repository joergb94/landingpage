<template>
       <div class="col-sm-6">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-5">
                                 <h4 class="card-title mb-0">
                                     Service Items 
                                    <div class="btn-group">
                                        
                                    </div> 
                                </h4>
                            </div>
                            <div class="col-sm-7 text-right">
                                 <button class="btn btn-success" @click="openModalS('modal', 'add')">New Item +</button>
                            </div>
                                   
         
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="date" v-model="search" @keyup.enter="ListService(1)" class="form-control">
                                    <button type="submit" @click="ListService(1)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>element</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-if="pagination.total == 0" class="text-center">
                                    <th colspan="5" class="text-center no-data">
                                        <h2><span class="badge  badge-pill badge-info">NO hay Juegos Porgamados</span></h2>
                                    </th>
                                </tr>

                                <tr v-for="item in dataItems" :key="item.id">
                                    <td v-text="item.title"></td>
                                    <td v-text="item.description"></td>
                                    <td v-text="item.element"></td>
                                    <td>
                                         <a class="btn btn-info btn-sm" v-bind:href="'/itemDetails/'+item.id"  > </a>
                                        <button type="button" class="btn btn-warning btn-sm" v-if="item.deleted_at == null"  @click="openModalS('modal', 'update', item)" >
                                          <i class="ti-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm" @click="DeleteOrRestoreS(item)">
                                          <i class="ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                            <nav>
                            <ul class="pagination">
                                <li class="page-item" v-if="pagination.current_page > 1">
                                    <a class="page-link" href="#" @click.prevent="pageChangeS(pagination.current_page - 1)">Ant</a>
                                </li>
                                <li class="page-item" v-for="page in pagesNumberS" :key="page" :class="[page == isActivedS ? 'active' : '']">
                                    <a class="page-link" href="#" @click.prevent="pageChangeS(page)" v-text="page"></a>
                                </li>
                                <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                                    <a class="page-link" href="#" @click.prevent="pageChangeS(pagination.current_page + 1)">Sig</a>
                                </li>
                            </ul>
                            </nav>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Modal -->
                <div class="modal" id="myModalS">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"  v-text="titleModal"></h4>
                        <button type="button"  class="close" @click="closeModalS()" >&times;</button>
                    </div>

                    <!-- Modal body -->
                    <form id='formItemS' enctype="multipart/form-data" >
                    <div class="modal-body">
                             <div class="form-group">
                                <label for="pwd">Title:</label>
                                  <textarea v-model="Title" placeholder="Enter title item" class="form-control rounded-0" name="title" id="title" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Element:</label>
                                 <select class="form-control" v-model="Element" id="element" name="element">
                                    <option value="" >Select Element Type</option>
                                    <option v-for="item in dataElements" :key="item.id" v-bind:value="item.name">
                                        {{ item.name }}
                                    </option>
                                </select>
                                 
                            </div>
                             <div class="form-group">
                                <label for="pwd">Description:</label>
                                 <textarea v-model="Description" placeholder="Enter description item" name="description" class="form-control rounded-0" id="title" rows="3"></textarea>
                            </div>
                             <div class="form-group">
                                <label for="pwd">Image:</label>
                                 <input type="file" class="form-control-file" value="" id="image" name="image" >
                            </div>
                            
                            <div class="form-group">
                                <label for="pwd">Footer:</label>
                                <input type="text"  v-model="Footer" name="footer" class="form-control" placeholder="Enter footer item" id="footer">
                            </div>
                       
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" v-if="action==1" @click="updateOrCreateS(1)">Save</button>
                        <button type="button" class="btn btn-primary" v-if="action==2" @click="updateOrCreateS(2)">Update</button>
                        <button type="button" class="btn btn-danger" @click="closeModalS()" >Close</button>
                    </div>
                     </form>

                    </div>
                </div>
                </div>
        
    </div>
</template>

<script src="./service.js"></script>