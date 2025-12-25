import { RichText, useBlockProps } from "@wordpress/block-editor";

export default function save({ attributes }) {
	const { title, subtitle, variant } = attributes;

	return (
		<div
			{...useBlockProps.save({
				className: `cta cta--${variant || "light"}`,
			})}
		>
			{title && <RichText.Content tagName="h2" value={title} />}

			{subtitle && <RichText.Content tagName="p" value={subtitle} />}
		</div>
	);
}
