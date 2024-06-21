<script setup>
import { Head, useForm } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue'; // Utilisation d'un composant fictif pour l'exemple

const form = useForm({
    question: '',
    answer: ''
});

const submitForm = () => {
    form.post(route('faqs.store'));
};
</script>

<template>
    <Head title="Ajouter une FAQ" />

    <AuthenticationCard>
        <template #logo>
            <!-- Logo à insérer si nécessaire -->
        </template>

        <form @submit.prevent="submitForm">
            <div>
                <InputLabel for="question" value="Question" />
                <TextInput v-model="form.question" id="question" type="text" class="mt-1 block w-full" required />
                <InputError class="mt-2" :message="form.errors.question" />
            </div>

            <div class="mt-4">
                <InputLabel for="answer" value="Réponse" />
                <TextInput v-model="form.answer" id="answer" type="text" class="mt-1 block w-full" required />
                <InputError class="mt-2" :message="form.errors.answer" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <PrimaryButton type="submit" class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Ajouter FAQ
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>
