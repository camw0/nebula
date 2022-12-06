export default ({ forInput, value, className, children }) => (
    <label htmlFor={forInput} className={`block font-medium text-sm text-gray-700 dark:text-gray-300 ` + className}>
        {value ? value : children}
    </label>
);
