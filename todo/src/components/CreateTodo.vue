<script setup>
import ListItem from './ListItem.vue';
// import ListItem1 from './ListItem1.vue';
import FancyButton from './FancyButton.vue'
import {ref, reactive, defineEmits} from "vue";

const todo = ref("hellopp");
const errmsg = ref("");
const invalid = ref(false);

const todoState = reactive(
    {
        todo: "test",
    }
);
const todoStateRef = ref(
    {
        todo: "test",
    }
);
const todoReactive = reactive("hellopp");
console.log(todoReactive, todo);
// console.log(todoState, todoStateRef.value);
const emit = defineEmits('createtodo');
const createTodo = () =>
{
console.log(todo.value);
    if(todo.value !== "")
    {
        emit('createtodo', todo.value);
        todo.value="";
        errmsg.value="";
        invalid.value = false;
// console.log(errmsg.value);

    }  
    errmsg.value="error";
    invalid.value = true;

};
</script>

<template>
    <div>
        <input type="text" v-model="todo" />
        <button @click="createTodo()">Create</button>
        <p v-show="invalid.value">{{ errmsg }}</p>
        <FancyButton @click="createTodo()">
 	    </FancyButton>
        <ul>
            <ListItem greeting-message="hello" :anther="todo" :comment-ids="[234, 266, 273]" />
            <ListItem greeting-message="helloooo" anther="hiii" :comment-ids="[234, 266, 273]"/>

        </ul>
    </div>
</template>

<style lang="scss" scoped>

</style>