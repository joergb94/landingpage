<template>
       <div class="col-sm-12">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-5">
                                 <h4 class="card-title mb-0">
                                     Calendario de Juegos
                                    <div class="btn-group">
                                        
                                    </div> 
                                </h4>
                            </div>
                            <div class="col-sm-7 text-right">
                                 <button class="btn btn-success" @click="openModal('modal', 'add')">New Item +</button>
                            </div>
                                   
         
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="date" v-model="search" @keyup.enter="ListUsers(1)" class="form-control">
                                    <button type="submit" @click="ListUsers(1)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
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
                                        <button type="button" class="btn btn-warning btn-sm" v-if="item.deleted_at == null"  @click="openModal('modal', 'update', item)" >
                                          <i class="ti-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm" @click="DeleteOrRestore(item)">
                                          <i class="ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                            <nav>
                            <ul class="pagination">
                                <li class="page-item" v-if="pagination.current_page > 1">
                                    <a class="page-link" href="#" @click.prevent="pageChange(pagination.current_page - 1)">Ant</a>
                                </li>
                                <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                                    <a class="page-link" href="#" @click.prevent="pageChange(page)" v-text="page"></a>
                                </li>
                                <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                                    <a class="page-link" href="#" @click.prevent="pageChange(pagination.current_page + 1)">Sig</a>
                                </li>
                            </ul>
                            </nav>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Modal -->
                <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"  v-text="titleModal"></h4>
                        <button type="button"  class="close" @click="closeModal()" >&times;</button>
                    </div>

                    <!-- Modal body -->
                    <form id='formItem' enctype="multipart/form-data" >
                    <div class="modal-body">
                       
                            <div class="form-group">
                                <label for="email">Section:</label>
                                 <select class="form-control" v-model="Section" id="section" name="section_id">
                                        <option value="" >Seleciona un Juego</option>
                                        <option v-for="item in dataSections" :key="item.id" v-bind:value="item.id">
                                            {{ item.name }}
                                        </option>
                                    </select>
                            </div>
                             <div class="form-group">
                                <label for="pwd">Title:</label>
                                  <textarea v-model="Title" placeholder="Enter title item" class="form-control rounded-0" name="title" id="title" rows="3"></textarea>
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
                        <button type="button" class="btn btn-primary" v-if="action==1" @click="updateOrCreate(1)">Save</button>
                        <button type="button" class="btn btn-primary" v-if="action==2" @click="updateOrCreate(2)">Update</button>
                        <button type="button" class="btn btn-danger" @click="closeModal()" >Close</button>
                    </div>
                     </form>

                    </div>
                </div>
                </div>
        
    </div>
</template>

<script src="./admin.js"></script>