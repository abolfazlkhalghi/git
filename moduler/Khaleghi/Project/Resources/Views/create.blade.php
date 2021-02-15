
<p class="box__title">ایجاد پروژه جدید</p>
<form action="{{ route('categories.store') }}" method="post" class="padding-30">
    @csrf
    <input type="text" name="title" required placeholder="نام دسته بندی" class="text">
    <input type="text" name="slug" required placeholder="نام انگلیسی دسته بندی" class="text">
    <div class="container" id="vue-app">
        <div class="row">
            <div class="col-sm-12">


                <ul class="list-group" v-if="todos.length > 0">
                    <li class="list-group-item"
                        v-bind:class="{ 'completed' : todo.completed }"
                        v-for="todo in todos | orderBy 'title' 1">
                        {{todo.title}}
                        <button class="btn btn-warning btn-xs pull-right" v-on:click="deleteTodo(todo)">Delete</button>
                        <button class="btn btn-xs pull-right margin-right-10"
                                v-bind:class="{'btn-success' : todo.completed, 'btn-danger' : !todo.completed}"
                                v-on:click="todoCompleted(todo)">{{todo.completed ? 'Completed' : 'Pending'}}</button>
                    </li>
                </ul>

                <div v-else><p>You don't have any Todos</p></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>
    </div>
    <button class="btn btn-webamooz_net">اضافه کردن</button>
</form>

@endsection
