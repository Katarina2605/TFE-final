<template>
    <div>
        <h2 class="text-2xl font-semibold mb-6">Foire aux questions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div v-for="faq in faqs" :key="faq.id" class="p-6 border rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">{{ faq.question }}</h3>
                <p class="text-gray-700 mb-4">{{ faq.answer }}</p>
                <div class="flex justify-end">
                    <inertia-link :href="route('faqs.edit', faq.id)" class="btn btn-secondary mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Éditer</inertia-link>
                    <form @submit.prevent="deleteFAQ(faq.id)" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { usePage } from '@inertiajs/inertia-vue3';

const { faqs } = usePage().props;

const deleteFAQ = (faqId) => {
    if (confirm('Êtes-vous sûr de vouloir supprimer cette FAQ ?')) {
        // Utilisez Inertia pour envoyer la requête de suppression
        inertia.delete(route('faqs.destroy', faqId));
    }
};
</script>
