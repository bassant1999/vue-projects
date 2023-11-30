<script setup>
import {ref, reactive, defineEmits} from "vue";
import { store } from '../store.js'


const user_name = ref("");
const password = ref("");


const login = () =>
{
    console.log(user_name.value);
    console.log(password.value);
    fetch('http://localhost/trials/trial.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
        request: 1,
        username: user_name.value,
        password: password.value
        /* other product data */
    })
    })
    .then(res => res.json())
    .then(res => 
        {
            console.log(res[0].status);
            if(res[0].status == 1)
            {
                store.status = 1;
                store.user_id = res[0].user_id;
                store.type = res[0].type;
            }
        });
    };

fetch('https://dummyjson.com/products')
.then(res => console.log(res))
.then(console.log);

// fetch('http://localhost/trials/trial.php', {mode: 'no-cors'})
// .then(res =>  console.log(res))
// .then(console.log);

// axios.post('http://localhost/trials/trial.php', {
//         request: 1,
//         username: 'test',
//         password: 'test'
//        })
//        .then(function(response) {
//         console.log(response);
//         if (response.data[0].status == 1) {
//          alert('Login Successfully');
//         } else {
//          alert("User does not exist");
//         }
//        })
//        .catch(function(error) {
//         console.log(error);
    //    });



// fetch('https://fakestoreapi.com/products')
//       .then(response => response.json())
//       .then(data => console.log(data))
//       .catch(error => console.error(error));

</script>

<template>
    <div>
  <button v-if = "store.status" @click="store.count++">
    From login: {{ store.count }}
  </button>

        <div class="container" id="app">
         <div class="container">
            <h4 class="text-success"></h4>
            <div class="panel panel-primary">
               <div class="panel-heading"></div>
               <div class="panel-body">
                  <div class="form-group">
                     <label class="control-label col-sm-2">UserName:</label>
                     <div class="col-sm-5">
                        <input class="form-control" type="text" name="user_name" v-model="user_name" >
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-2">Password:</label>
                     <div class="col-sm-5">
                        <input class="form-control" type="password" name="password" v-model="password">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-2">  </label>
                     <div class="col-sm-5">
                        <input type="button" @click='login();' value="Login" class="btn btn-primary">                      
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