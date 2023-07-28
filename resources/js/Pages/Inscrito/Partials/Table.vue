<script setup>

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
    return `Rua ${end.street}, n° ${end.number},
        ${end.complement ? `${end.complement}, ` : ""}
        ${end.locality}`
}

</script>

<template>
    <table
        class="table-fixed border-collapse
            border border-slate-500 p-2 bg-gray-100">
        <thead>
            <tr>
                <th class="border border-slate-600" >CPF</th>
                <th class="border border-slate-600" >Nome</th>
                <th class="border border-slate-600 px-2" >Data de Nascimento</th>
                <th class="border border-slate-600" >Telefone</th>
                <th class="border border-slate-600" >Endereço</th>
            </tr>
        </thead>
        <tbody  v-for="inscrito in inscritos.data" :key="inscrito.id">
            <tr class="">
                <td class="border border-slate-700 px-2" >{{inscrito.document}}</td>
                <td class="border border-slate-700 px-2" >{{inscrito.name}}</td>
                <td class="border border-slate-700 px-2" >{{inscrito.birthDate}}</td>
                <td class="border border-slate-700 px-2" >(21) {{inscrito.phone}}</td>
                <td class="border border-slate-700 px-2" >{{fullEndereco(inscrito.endereco)}}</td>
            </tr>
        </tbody>
    </table>
</template>

<style scoped>

</style>
