module.exports = {
    env: {
        browser: true,
        es2020: true,
    },
    extends: [
        'airbnb-base',
    ],
    parserOptions: {
        ecmaVersion: 'latest',
    },
    rules: {
        'max-len': ["error", { code: 120, ignoreComments: true }],
        'no-console': 'off',
        'no-var': 'off',
        'one-var': 'off',
        'prefer-const': 'off',
        'vars-on-top': 'off',
        eqeqeq: 'off',
        'no-else-return': 'off',
        'eol-last': 'off',
        indent: ["error", 4, { SwitchCase: 1 }],
        'no-multiple-empty-lines': 'off',
        'no-plusplus': 'off',
        'operator-linebreak': 'off',
        'object-shorthand': 'off',
        'dot-notation': 'off',
        'no-prototype-builtins': 'off',
        'array-element-newline': 'off',
        'array-bracket-newline': 'off',
        'arrow-parens': 'off',
        'prefer-spread': 'off',
        'function-paren-newline': 'off',
        'func-names': 'off',
        'prefer-arrow-callback': 'off',
        'no-iterator': 'off',
        'no-restricted-syntax': 'off',
        'no-restricted-properties': 'off',
        'no-use-before-define': 'off',
        'switch-colon-spacing': 'off',
        'prefer-destructuring': 'off',
        quotes: 'off',
        'prefer-template': 'off',
        // Allow global vars to be unused as we can't properly check those
        'no-unused-vars': 'off',
        // To allow call backs to style elements
        'no-param-reassign': 'off',
        'lines-between-class-members': 'off',
    },
};
