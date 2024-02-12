<template>
    <Layout>
        <div class="Wrapper">
            <div class="Box">
                <div class="TitleWrapper">
                    <h1 class="Title">Update user permission</h1>
                </div>
                <form :action="route('admin.users.update', { user: user.id })" method="POST">
                    <input type="hidden" name="_token" :value="csrf">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="FormGrid">
                        <div class="Column">
                            <label>User
                                <span class="Span">Current user email</span>
                            </label>
                            <input type="text" placeholder="User name" class="Input" :value="user.email" :disabled="true" />
                        </div>
                        <div class="Column">
                            <label>Permission Level
                                <span class="Span">The current user's permission
                                    level</span>
                            </label>
                            <select name="is_admin" class="Input">
                                <option :value="0" :selected="user.is_admin == 0">User</option>
                                <option :value="1" :selected="user.is_admin == 1">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="ButtonWrapper">
                        <button type="submit" class="UpdateButton">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../../Layouts/Layout.vue';


export default {
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
    props: {
        user: Object, // Inertia.js injects the data as a prop
    },
    components: { Layout }
};
</script>

<style scoped>
.Wrapper {
    margin-top: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;

    .Box {
        padding: 2.5rem;
        background: #ffffff;
        /* Equivalent to p-10 in Tailwind */
        border-radius: 0.375rem;
        /* Equivalent to rounded in Tailwind */
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        /* Equivalent to shadow-sm in Tailwind */
        border-width: 0.125rem;
        /* Equivalent to border-2 in Tailwind */
        border-style: solid;
        border-color: rgba(212, 0, 255, 0.35);
        /* Equivalent to border-opacity-35 border-blue-700 in Tailwind */
        max-width: 32rem;
        /* Equivalent to max-w-lg in Tailwind */
        width: 66.6667%;
        /* Equivalent to w-2/3 in Tailwind */
    }

    .TitleWrapper {
        margin-bottom: 1.5rem;
        /* Equivalent to mb-6 in Tailwind */
        padding: 2.5rem;
        /* Equivalent to p-10 in Tailwind */
        background-color: #fff;
        /* Equivalent to bg-white in Tailwind */
        margin: -2.5rem;
        /* Equivalent to -m-10 in Tailwind */

        .Title {
            font-weight: bold;
            /* Equivalent to font-bold in Tailwind */
            font-size: 1.5rem;
            /* Equivalent to text-2xl in Tailwind */
            color: #4a5568;
            /* Equivalent to text-gray-700 in Tailwind */
            text-align: center;
            /* Equivalent to text-center in Tailwind */
        }
    }

    .FormGrid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1.5rem;

        .Column {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }
    }

    .Span {
        display: block;
        font-size: 0.75rem;
        font-weight: lighter;
        color: #787878;
    }

    .Input {
        margin-top: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        font-size: 20px;
        background: white;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        border-radius: 0.375rem;
    }

    .Input:disabled {
        background: rgb(209, 209, 209);
    }

    .ButtonWrapper {
        margin-top: 1.5rem;
        display: flex;
        gap: 1.5rem;

        .UpdateButton {
            border-radius: 8px;
            background-color: #3b82f6;
            padding-top: 1rem;
            padding-bottom: 1rem;
            padding-left: 2.5rem;
            padding-right: 2.5rem;
            font-weight: bold;
            transition: all 0.3s;
            font-size: 1.875rem;
            color: #fff;
            border-color: white;
            cursor: pointer;
        }

        .UpdateButton:hover {
            background-color: #2563eb;
        }
    }
}
</style>

