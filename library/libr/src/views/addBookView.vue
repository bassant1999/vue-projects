<script setup>
import { store } from '../store.js'


const title = ref("");
const author = ref("");
const description = ref("");

const add = () =>
{
    fetch('http://localhost/trials/add_book.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
        request: 1,
        title : title.value,
        author: author.value,
        description: description.value,
        user_id: store.user_id
        /* other product data */
    })
    })
    .then(res => res.json())
    .then(res => 
        {
            console.log(res[0].status);
            
        });
}

</script>

<template>
    <div>
        <div class="container" id="app">
         <div class="container">
            <h4 class="text-success"></h4>
            <div class="panel panel-primary">
               <div class="panel-heading"></div>
               <div class="panel-body">
                  <div class="form-group">
                     <label class="control-label col-sm-2">Title:</label>
                     <div class="col-sm-5">
                        <input class="form-control" type="text" name="title" v-model="title" >
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="control-label col-sm-2">Author:</label>
                     <div class="col-sm-5">
                        <input class="form-control" type="text" name="author" v-model="author" >
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="control-label col-sm-2">Description:</label>
                     <div class="col-sm-5">
                        <input class="form-control" type="text" name="description" v-model="description" >
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="control-label col-sm-2">  </label>
                     <div class="col-sm-5">
                        <input type="button" @click='add();' value="Add" class="btn btn-primary">                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

    </div>
</template>

<style lang="scss" scoped>

</style>