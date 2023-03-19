<template>

   


    <div class="scroll-container">

    
   <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">id</th>
        <th scope="col">Дата</th>
        <th scope="col">Курс</th>
        <th scope="col">Группа</th>
        <th scope="col">Название учебной дисциплины</th>
        <th scope="col">Лекции</th>
        <th scope="col">Практические</th>
        <th scope="col">Лабы</th>
        <th scope="col">Модуль</th>
        <th scope="col">Консультации зва семестр</th>
        <th scope="col">Консультации за экзамен</th>
        <th scope="col">Зачеты</th>
        <th scope="col">Экзамены</th>
        <th scope="col">Курсовые работы</th>
        <th scope="col">ВКР бакалавров</th>
        <th scope="col">ВКР специалистов</th>
        <th scope="col">ВКР магистров</th>
        <th scope="col">Госэкзамен</th>
        <th scope="col">Рецензирование ВКР</th>
        <th scope="col">Защита ВКР</th>
        <th scope="col">Руководство аспирантами</th>
        <th scope="col">Др виды учебной нагрузки</th>
      </tr>
    </thead>
    <tbody>
        <tr :key="viewJourn" v-for="(item,index) in viewJourn">
            <td>
                <button @click="$event => removeRecord($event)" class="btn btn-danger">Delete</button>
            </td>
      <!-- <tr :key="'journal'+index" v-for="(item,index) in journals"> -->
        <td >{{item.id}}</td>
        <td >{{item.date}}</td>
        <td >{{item.course}}</td>
        <td >{{item.group}}</td>
        <td >{{item.title}}</td>
        <td>{{item.lectures}}</td>
        <td >{{item.practical}}</td>
        <td >{{item.laboratory}}</td>
        <td >{{item.modular_control}}</td>
        <td >{{item.consultations_semester}}</td>
        <td >{{item.consultations_exam}}</td>
        <td >{{item.credits}}</td>
        <td >{{item.exams}}</td>
        <td >{{item.term_papers}}</td>
        <td >{{item.bachelor_wrc}}</td>
        <td >{{item.speciallist_wrc}}</td>
        <td >{{item.masters_wrc}}</td>
        <td >{{item.practice_management}}</td>
        <td >{{item.state_examinations}}</td>
        <td >{{item.wrc_rewiew}}</td>
        <td >{{item.wrc_rewiew}}</td>
        <td >{{item.wrc_defence}}</td>
        <td >{{item.graduate_student_management}}</td>
        <td >{{item.other}}</td>
        
      <!-- </tr> -->
    </tr>
     
    </tbody>
  </table>
</div>



<div class="d-flex" v-if="journals.length > 10">
        <button @click="$event => viewJourn = Array.from(journals)" class="btn btn-primary mx-2">All</button>

        <nav aria-label="Page nav">
            <ul class="pagination">
                <li class="page-item m-1 " v-for="n in Math.ceil(journals.length / 10)">
                    <a class="page-link" @click="$event => viewJourn = journals.slice(n*10-10,n*10)" href="#">{{ n }}</a>
                </li>
            </ul>

        </nav>
</div>

</template>

<script>
    export default{
        data(){
            return{
                journals: [],
                viewJourn: []
            }
        },
        mounted(){
            //this.loadExcelFromServer()
            this.loadExcel()
        },
        methods:{
            loadExcelFromServer(){
                axios.get("/api/journals").then(resp=>{
                    this.journals = resp.data.data
                })
            },
            async loadExcel(){
                await axios.get("/api/journals").then(resp => {
                    this.journals = resp.data.data
                    this.viewJourn = this.journals.slice(0,10)
                })
            },
            async removeExcel(event){
                    let rowElem = event.target.parentNode.parentNode.cells
                    await axios.delete('api/journals/' + rowElem[1].innerText)
                    this.loadExcel()
            },
            async removeRecord(event){
                    let rowElem = event.target.parentNode.parentNode.cells
                    await axios.delete('api/journals/' + rowElem[1].innerText)
                    this.loadExcel()
            }
        }
    }
</script>

<style>
.scroll-container{
    width:100%;
    padding: 20px;
    box-sizing: border-box;
    overflow: scroll;
    height: 700px;
}
.scroll-container .table{
    min-width: 2000px;
}
</style>