<script setup>

import {router, Link} from "@inertiajs/vue3";
import DangerButton from "@/Components/DangerButton.vue";

defineProps({
    inscritos: {
        data: [
            {
                id: Number,
                name: String,
                document: String,
                birthDate: String,
                phone: String,
                endereco: {
                    id:Number,
                    street: String,
                    number: String,
                    complement: String,
                    locality: String
                }
            }
        ]
    }
});

const fullEndereco = (end) => {

    if(!end)  return '';

    return `Rua ${end.street}, n° ${end.number},
        ${end.complement ? `${end.complement}, ` : ""}
        ${end.locality}`
}

const onDeleteInscrito = (id) => {
    router.delete(`/inscritos/${id}/`)    
}

</script>

<template>
    <table
        class="table-fixed border-collapse
            border border-indigo-500 p-2 bg-gray-100">
        <thead>
            <tr>
                <th class="border-b border-indigo-500" >CPF</th>
                <th class="border-b border-indigo-500" >Nome</th>
                <th class="border-b border-indigo-500 px-2" >Data de Nascimento</th>
                <th class="border-b border-indigo-500" >Telefone</th>
                <th class="border-b border-indigo-500" >Endereço</th>
                <th class="border-b border-indigo-500" >Ações</th>
            </tr>
        </thead>
        <tbody  v-for="inscrito in inscritos.data" :key="inscrito.id">
            <tr class="border-t border-indigo-500 hover:border-2">
                <td class="py-2 px-2">{{inscrito.document}}</td>
                <td class="py-2 px-2"> {{inscrito.name}}</td>
                <td class="py-2 px-2">{{inscrito.birthDate}}</td>
                <td class="py-2 px-2">(21) {{inscrito.phone}}</td>
                <td class="py-2 px-2">{{fullEndereco(inscrito.endereco)}}</td>
                <td @click="onDeleteInscrito(inscrito.id)"
                    class="border-l border-indigo-500
                    hover:bg-red-600 cursor-pointer"
                >
                X
                    <!-- <Link :href="route('dashboard')" >X</Link>-->
                </td>
            </tr>
        </tbody>
    </table>
    <!-- <Link :href="route('dashboard')" >X</Link>-->
</template>

<style scoped>

</style>
