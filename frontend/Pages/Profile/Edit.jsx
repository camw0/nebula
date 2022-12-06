import React from 'react'
import { Head } from '@inertiajs/inertia-react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm'
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm'
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm'

export default ({ auth, mustVerifyEmail, status }) => (
    <AuthenticatedLayout
        auth={auth}
        header={'Profile'}
        description={'Manage your account and security information.'}
    >
        <Head title="Profile" />
        <div className="py-12">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div className="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <UpdateProfileInformationForm
                        mustVerifyEmail={mustVerifyEmail}
                        status={status}
                        className="max-w-xl"
                    />
                </div>
                <div className="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <UpdatePasswordForm className="max-w-xl" />
                </div>
                <div className="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <DeleteUserForm className="max-w-xl" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
)
