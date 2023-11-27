/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
	useBlockProps,
	RichText,
	MediaUpload,
	MediaUploadCheck,
	InspectorControls,
} from "@wordpress/block-editor";
import { Button, PanelBody, TextControl } from "@wordpress/components";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const { Heading, mediaID, mediaURL, buttonText, buttonURL } = attributes;
	const onChangeHeading = (newHeading) => {
		setAttributes({ Heading: newHeading });
	};
	const onSelectImage = (media) => {
		setAttributes({
			mediaURL: media.url,
			mediaID: media.id,
		});
	};
	const onRemovemedia = () => {
		setAttributes({
			mediaID: undefined,
		});
	};
	return (
		<>
			<InspectorControls>
				<PanelBody title={__("Settings", "walletup")}>
					<TextControl
						label={__("Button URL")}
						value={buttonURL}
						onChange={(newURL) => setAttributes({ buttonURL: newURL })}
					/>
				</PanelBody>
			</InspectorControls>
			<section id="service-section" {...useBlockProps()}>
				<div className="service-section">
					<div className="container p-0">
						<div className="service-section__inner">
							<div className="row">
								<div className="col-lg-5 col-md-5 col-sm-5">
									<div className="service-section__inner_img">
										<MediaUploadCheck>
											<MediaUpload
												onSelect={onSelectImage}
												allowedTypes="image"
												value={mediaID}
												render={({ open }) => (
													<button onClick={open}>
														{!mediaID ? (
															__("Upload Image")
														) : (
															<img src={mediaURL} />
														)}
													</button>
												)}
											/>
										</MediaUploadCheck>
										<MediaUploadCheck>
											<Button onClick={onRemovemedia} isLink isDestructive>
												{__("remove image", "post-media-selector")}
											</Button>
										</MediaUploadCheck>
									</div>
								</div>
								<div className="col-lg-7 col-md-7 col-sm-7">
									<div className="service-section__inner_heading">
										<RichText
											tagName="h2"
											value={Heading}
											onChange={onChangeHeading}
											placeholder={__(
												"Enter service-section text...",
												"walletup",
											)}
										/>
									</div>
									<div className="service-section__inner_button">
										<RichText
											tagName="a"
											className="button-text"
											placeholder={__("Button Text")}
											value={buttonText}
											onChange={(newText) =>
												setAttributes({ buttonText: newText })
											}
										/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</>
	);
}
