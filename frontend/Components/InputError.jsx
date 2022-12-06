import React from 'react'

export default ({ message, className = '' }) => (message ? <p className={'text-sm text-red-600 dark:text-red-400 ' + className}>{message}</p> : null)
