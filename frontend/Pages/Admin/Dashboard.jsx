import React from 'react'
import Box from '@/Components/Box'
import { Head } from '@inertiajs/inertia-react'
import AdminLayout from '@/Layouts/AdminLayout'

export default ({ auth, errors }) => (
    <AdminLayout
        auth={auth}
        errors={errors}
        header={'Admin Dashboard'}
        description={'Welcome to the Nebula admin dashboard.'}
    >
        <Head title="Admin Dashboard" />
        <div className="py-12">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Box>Hello</Box>
            </div>
        </div>
    </AdminLayout>
)
