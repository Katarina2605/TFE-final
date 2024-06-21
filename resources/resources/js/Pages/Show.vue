<script setup>
import { Head, usePage } from '@inertiajs/inertia-vue3';

const { faq } = usePage().props;

const deleteFAQ = () => {
    if (confirm('Êtes-vous sûr de vouloir supprimer cette FAQ ?')) {
        form.delete(route('faqs.destroy', faq.id));
    }
};
</script>

<template>
    <Head :title="faq.question" />

    <div>
        <h2 class="text-2xl font-semibold">{{ faq.question }}</h2>
        <p class="text-gray-700 mb-4">{{ faq.answer }}</p>

        <div class="flex items-center justify-end mt-4">
            <PrimaryButton @click="deleteFAQ" class="ms-4">
                Supprimer
            </PrimaryButton>
            <Link :href="route('faqs.edit', faq.id)" class="ml-4">
                Modifier
            </Link>
        </div>
    </div>
</template>
