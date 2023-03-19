<script setup>
import { ref } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900"></div>
                    <div class="row">
                        <button class="btn btn-primary" @click="showModal">
                            Update
                        </button>
                        <modal v-show="isModalVisible" @close="closeModal"/>
                    </div>
                    <div class="row">
                            <div class="col-12">
                                <ExcelViewer/>
                            </div>
                    </div>
                </div>
            </div>
           
        </div>
    </AuthenticatedLayout>
</template>

<script>
import ExcelUploader from '@/Components/ExcelUploader.vue';
import ExcelViewer from '@/Components/ExcelViewer.vue';
import modal from '@/Components/ModalComponent.vue';
//  import vueJsonCompare from 'vue-json-compare';
// import { toHandlers } from 'vue';
    export default{
        components:{
            ExcelUploader,
            ExcelViewer,
            modal,
           
        },
        data(){
            return{
                isModalVisible:false
            };
        },
        methods:{
            showModal() {
                this.isModalVisible=true;
            },
            closeModal(){
                this.isModalVisible=false;
            }
        }
    }
</script>
