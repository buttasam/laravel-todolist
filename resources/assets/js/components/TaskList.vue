<template>
    <div class='row'>

        <div class="col-md-8 col-md-offset-2">

            <h4>New Task</h4>
            <form action="#" @submit.prevent="createTask()">
                <div class="input-group">
                    <input v-model="task.body" type="text" name="body" class="form-control" autofocus>
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">New Task</button>
                </span>
                </div>
            </form>
            <h4>All Tasks</h4>
            <ul class="list-group">
                <li class="list-group-item list-group-item-warning" v-if='list.length === 0'>There are no tasks yet!
                </li>
                <li class="list-group-item" v-for="(task, index) in list">

                    <span v-if="task.done"><strike>{{ task.body }}</strike></span>
                    <span v-else>{{ task.body }}</span>

                    <div class="btn-group pull-right">
                        <button v-if="!task.done" @click="markAsDoneTask(task.id)" class="btn btn-warning btn-xs">Done
                        </button>
                        <button v-if="task.done" @click="deleteTask(task.id)" class="btn btn-danger btn-xs pull-right">
                            Delete
                        </button>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</template>
<script>
    export default {

        props: ['todolist'],

        data() {
            return {
                list: [],
                task: {
                    id: '',
                    body: '',
                    todolist: '',
                }
            };
        },

        created() {
            this.fetchTaskList();
        },

        methods: {
            fetchTaskList() {
                axios.get('/laravel-todolist/api/tasks/' + this.todolist).then((res) => {
                    this.list = res.data;
                });
            },

            createTask() {
                this.task.todolist = this.todolist;
                axios.post('/laravel-todolist/api/tasks', this.task)
                    .then((res) => {
                        this.task.body = '';
                        this.edit = false;
                        this.fetchTaskList();
                    })
                    .catch((err) => console.error(err));
            },

            deleteTask(id) {
                axios.delete('/laravel-todolist/api/tasks/' + id)
                    .then((res) => {
                        this.fetchTaskList()
                    })
                    .catch((err) => console.error(err));
            },

            markAsDoneTask(id) {
                console.log("marked " + id)
                axios.get('/laravel-todolist/api/tasks/markAsDone/' + id)
                    .then((res) => {
                        this.fetchTaskList()
                    })
                    .catch((err) => console.error(err))
            }
        }
    }
</script>