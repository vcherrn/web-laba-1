

<script>

    export default{
        name:'modal',
        methods:{
            close(){
                this.$emit('close');
            },
            async addNewRecord(){
                await axios.post('/api/journals',{
                    p0: document.getElementById('exampleInput1').value,
                    p1: document.getElementById('exampleInput2').value,
                    p2: document.getElementById('exampleInput3').value,
                    p3: document.getElementById('exampleInput4').value,
                    p4: document.getElementById('exampleInput5').value,
                    p5: document.getElementById('exampleInput6').value,
                    p6: document.getElementById('exampleInput7').value,
                    p7: document.getElementById('exampleInput8').value,
                    p8: document.getElementById('exampleInput9').value,
                    p9: document.getElementById('exampleInput10').value,
                    p10: document.getElementById('exampleInput11').value,
                    p11: document.getElementById('exampleInput12').value,
                    p12: document.getElementById('exampleInput13').value,
                    p13: document.getElementById('exampleInput14').value,
                    p14: document.getElementById('exampleInput15').value,
                    p15: document.getElementById('exampleInput16').value,
                    p16: document.getElementById('exampleInput17').value,
                    p17: document.getElementById('exampleInput18').value,
                    p18: document.getElementById('exampleInput19').value,
                    p19: document.getElementById('exampleInput20').value,
                    p20: document.getElementById('exampleInput21').value,
                    p21: document.getElementById('exampleInput22').value,

                })

                this.$emit('close');
            },
            async editRecord() {
                await axios.put('/api/journals',{
                    p0: document.getElementById('exampleInput0').value,
                    p1: document.getElementById('exampleInput1').value,
                    p2: document.getElementById('exampleInput2').value,
                    p3: document.getElementById('exampleInput3').value,
                    p4: document.getElementById('exampleInput4').value,
                    p5: document.getElementById('exampleInput5').value,
                    p6: document.getElementById('exampleInput6').value,
                    p7: document.getElementById('exampleInput7').value,
                    p8: document.getElementById('exampleInput8').value,
                    p9: document.getElementById('exampleInput9').value,
                    p10: document.getElementById('exampleInput10').value,
                    p11: document.getElementById('exampleInput11').value,
                    p12: document.getElementById('exampleInput12').value,
                    p13: document.getElementById('exampleInput13').value,
                    p14: document.getElementById('exampleInput14').value,
                    p15: document.getElementById('exampleInput15').value,
                    p16: document.getElementById('exampleInput16').value,
                    p17: document.getElementById('exampleInput17').value,
                    p18: document.getElementById('exampleInput18').value,
                    p19: document.getElementById('exampleInput19').value,
                    p20: document.getElementById('exampleInput20').value,
                    p21: document.getElementById('exampleInput21').value,
                    p22: document.getElementById('exampleInput22').value,
                })
                this.$emit('close');
            }
        }
    }
</script>

<template>
    <transition name="modal-fade">
        <div class="modal-backdrop">
            <div class="modal" role="dialog" aria-labelledby ="modalTitle" aria-describedby="modalDescription">
                <header class="modal-header" id="modalTitle">
                    <slot name="header">
                        <datagrid>
                            <button type="button" class="btn-close" @click="close" aria-label="Close Modal">
                            X
                            </button>
                        </datagrid>
                    </slot>
                </header>
             
       
              
                <section class="modal-body" id="modalDescription">
                    <slot name="body">
                        <form onsubmit="return false" class="m-2">
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput0" placeholder="ID">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput1" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput2" placeholder="course">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput3" placeholder="group">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput4" placeholder="title">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput5" placeholder="lectures">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput6" placeholder="practical">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput7" placeholder="laboratory">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput8" placeholder="modular_control">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput9" placeholder="consultations_semester">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput10" placeholder="consultations_exam">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput11" placeholder="credits">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput12" placeholder="exams">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput13" placeholder="term_papers">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput14" placeholder="bachelor_wrc">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput15" placeholder="speciallist_wrc">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput16" placeholder="masters_wrc">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput17" placeholder="practice_management">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput18" placeholder="state_examinations">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput19" placeholder="wrc_rewiew">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput20" placeholder="wrc_defence">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput21" placeholder="graduate_student_management">
                            </div>
                            <div class="form-group">
                                <input class="form-control m-2" id="exampleInput22" placeholder="other">
                            </div>
                         


                            <button @click="addNewRecord" type="submit" class="bg-primary btn btn-primary mx-2" >Add</button>
                            <button @click="editRecord" type="submit" class="bg-primary btn btn-primary mx-2" >Edit</button>

                        </form>
                    </slot>

                </section>

                <footer class="modal-footer">
                    <slot name="footer">
                        <!-- <button type="button" class="btn-green p-2" @click="close" aria-label="Close">
                            Close
                        </button> -->
                    </slot>
                </footer>
            </div>
        </div>
    </transition>
</template>

<style>
.modal-backdrop{
    position: fixed;
    top:0;
    bottom: 0;
    left:0;
    right:0;
    background-color: black;
    display: flex;
    justify-content: center;
    align-items: center;
}
.modal{
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);
    height: 500px;
    width:800px;
    background: #FFFFFF;
    box-sizing: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
}

.modal-header,
.modal-footer {
    border-top: 1px solid #eee;
    justify-content: flex-end;
}
.modal-body{
    position: relative;
    padding: 20px 10px;
}
</style>