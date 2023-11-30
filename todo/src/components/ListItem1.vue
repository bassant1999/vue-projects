<script setup>
    import {ref , defineEmits} from "vue";

    const props = defineProps({
        key: Number,
        idx: Number,
        title: String,
        todo:
        {
            type:Object,
            required:true
        }
        });
        // console.log(title);
    const todo_edit = ref(props.todo.todo);
    const emit = defineEmits('editTodo');

    const editTodo = () =>
    {
        console.log(todo_edit.value);
        console.log("key: ");
        console.log(props.todo.id);
        emit('editTodo', {k:props.idx, v: todo_edit.value});
    };

    const deleteTodo = () =>
    {
        emit('deleteTodo', props.idx);
    };

</script>

<template>
    <li>
        <input type="checkbox" v-model="todo.checked" />
        {{ todo.todo }}
        <input type="text" v-model="todo_edit" />
        <button @click="editTodo()" >Edit</button>
        <p>{{todo_edit}}</p>
        <button @click="deleteTodo()" >Delete</button>

    </li>
    <!-- <li>{{ i}}</li> -->
    <!-- <li> this {{ todo.todo }}</li> -->
    <!-- <li>{{ todo.key }}</li> -->
    <!-- <li>{{ todo.checked }}</li>  -->
    

</template>


<style lang="scss" scoped>

</style>