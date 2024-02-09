<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Log in" />

        <div v-if="status" class="LoginStatus">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput id="email" type="email" class="LoginInput" v-model="form.email" required autofocus
                    autocomplete="username" />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput id="password" type="password" class="LoginInput" v-model="form.password" required
                    autocomplete="current-password" />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="RememberMe">
                <label class="flex-items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="Label">Remember me</span>
                </label>
            </div>

            <div class="flex-items-center justify-end mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')"
                    class="ForgotPassword">
                Forgot your password?
                </Link>

                <PrimaryButton class="LoginButton" :class="{ 'isProcessing': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>

<style>
.LoginInput {
    margin-top: 0.25rem;
    display: block;
    width: 100%;
}

.LoginButton {
    margin-left: 1rem;
    /* Assuming 1rem equals 16px */
}

.isProcessing {
    opacity: 0.25;
}

.LoginStatus {
    margin-bottom: 1rem;
    font-weight: 500;
    font-size: 0.875rem;
    color: #38a169;
}

.RememberMe {
    display: block;
    margin-top: 1rem;

    .Label {
        margin-left: 0.5rem;
        font-size: 0.875rem;
        color: #4a5568;
    }
}

.flex-items-center {
    display: flex;
    align-items: center;
}

.justify-end.mt-4 {
    justify-content: end;
    margin-top: 1rem;
}

.mt-4 {
    margin-top: 1rem;
}

.ForgotPassword {
  text-decoration: underline; /* Assuming underline in Tailwind corresponds to text-decoration: underline */
  font-size: 0.875rem; /* Assuming text-sm in Tailwind corresponds to 0.875rem */
  color: #4a5568; /* Assuming text-gray-600 in Tailwind corresponds to #4a5568 */
  transition: color 0.15s ease-in-out; /* Assuming hover:text-gray-900 in Tailwind */
  border-radius: 0.375rem; /* Assuming rounded-md in Tailwind corresponds to 0.375rem */
  outline: none; /* Assuming focus:outline-none in Tailwind */
}

.ForgotPassword:hover {
  color: #1a202c; /* Assuming hover:text-gray-900 in Tailwind corresponds to #1a202c */
}

.ForgotPassword:focus {
  outline: none;
  box-shadow: 0 0 0 2px rgba(66, 153, 225, 0.5); /* Assuming focus:ring-2 and focus:ring-indigo-500 in Tailwind */
}
</style>
