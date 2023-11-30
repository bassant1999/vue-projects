<script setup>
import CreateTodo from '../components/CreateTodo.vue';
import ListItem from '../components/ListItem.vue';
import ListItem1 from '../components/ListItem1.vue';
import {ref} from "vue";
import {uid} from "uid";
import { store } from '../store.js'


const todoList = ref([]);


const CreatTodo = (todo) =>
{
 console.log("todo: ");
 console.log(todo);
//  alert(c);

 todoList.value.push(
  {
    id: uid(),
    todo,
    checked:false
  }
 );
 console.log(todoList.value.length);
//  c = c + 1;
};

const editTodo = (eTodo) =>
{
  console.log("eTodo.k");
  console.log(eTodo.k);
  console.log(todoList.value[eTodo.k]);
  todoList.value[eTodo.k].todo = eTodo.v;
  console.log(todoList.value[eTodo.k]);


  // alert("here");
}

const deleteTodo = (indx) =>
{
  console.log(indx, todoList.value);
  todoList.value = todoList.value.filter((item) => item.id != indx)
  // todoList.splice(indx, 1);
  console.log(indx, todoList.value);


}

</script>

<template>
  <main>
    <h1> Create Todo</h1>
    <h2><button @click="store.count++">
    From B: {{ store.count }}
  </button></h2>
    <CreateTodo @createtodo="CreatTodo"/>
    <ul v-if="todoList.length > 0">
      <ListItem v-for="item in todoList">
        <input type="checkbox" v-model="item.checked" />
        {{ item.todo }}
        {{ item.checked }}
      </ListItem>
    </ul>
    <p v-else>add todo item</p>
    
    
    <ul>
      <!-- <ListItem1
      @editTodo="editTodo"
      v-for="item in todoList"
      :key="item.id"
      :title="item.todo"
      :todo="item"
      :i="item"
    ></ListItem1>

    <ListItem1
      @editTodo="editTodo"
      v-for="item in todoList"
      :key="item.id"
      :title="item.todo"
      :todo="item"
      :i="item"
    ></ListItem1> -->

    <ListItem1
      @editTodo="editTodo"
      @deleteTodo="deleteTodo"
      v-for="(value,index) in todoList"
      :idx="index"
      :todo="value"
    ></ListItem1>

    
    </ul>
  </main>
</template>
