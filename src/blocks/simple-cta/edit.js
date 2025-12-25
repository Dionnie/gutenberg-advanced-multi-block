import {
	InspectorControls,
	RichText,
	useBlockProps,
} from "@wordpress/block-editor";

import { PanelBody, SelectControl } from "@wordpress/components";
import "./editor.scss";

export default function Edit({ attributes, setAttributes, content }) {
	const { title, subtitle, variant } = attributes;
	return (
		<>
			<InspectorControls>
				<PanelBody title="CTA Settings">
					<SelectControl
						label="Style"
						value={variant}
						options={[
							{ label: "Light", value: "light" },
							{ label: "Dark", value: "dark" },
						]}
						onChange={(variant) => setAttributes({ variant })}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()}>
				<p>{JSON.stringify(attributes)}</p>
				<br />
				<p>{JSON.stringify(content)}</p>
				<RichText
					tagName="h2"
					value={title}
					placeholder="CTA title…"
					onChange={(title) => setAttributes({ title })}
				/>

				<RichText
					tagName="p"
					value={subtitle}
					placeholder="CTA subtitle…"
					onChange={(subtitle) => setAttributes({ subtitle })}
				/>
			</div>
		</>
	);
}
