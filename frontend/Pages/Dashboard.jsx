import React from 'react'
import { Head } from '@inertiajs/inertia-react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'

export default (props) => {
  return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={'Dashboard'}
            description={'Welcome to the Nebula dashboard.'}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 dark:text-gray-100">You&apos;re logged in!</div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
  )
}
